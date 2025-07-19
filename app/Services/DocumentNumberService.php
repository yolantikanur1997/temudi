<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class DocumentNumberService
{
    /**
     * Generates a new document number.
     *
     * @param string $prefix The document type prefix (e.g., 'INV', 'PO')
     * @param string $format The format string (e.g., '{PREFIX}/{YEAR}/{MONTH}/{DAY}/{RUNNING_NUMBER}')
     * @param int $lastRunningNumber The last known running number for this sequence.
     * This service simply increments this number by 1.
     * @return string The generated document number
     */
    public function generate(string $prefix,string $organizationName, string $format, int $lastRunningNumber): string
    {
        $now = Carbon::now();

        // Increment the provided last running number
        $newRunningNumber = $lastRunningNumber + 1;

        $orgCode = $this->getOrganizationCode($organizationName);

        // Prepare replacements for the format string
        $replacements = [
            '{PREFIX}' => $prefix,
            '{ORGANIZATION}' => $orgCode,
            '{YEAR}' => $now->format('Y'),
            '{MONTH}' => $now->format('m'),
            '{DAY}' => $now->format('d'),
            // Pad with leading zeros (e.g., 1 becomes 0001)
            '{RUNNING_NUMBER}' => str_pad($newRunningNumber, 4, '0', STR_PAD_LEFT),
            // Add more replacements as needed
        ];

        // Replace placeholders in the format string
        $documentNumber = str_replace(
            array_keys($replacements),
            array_values($replacements),
            $format
        );

        return $documentNumber;
    }

    
    protected function getOrganizationCode(string $name): string
    {
        // Remove common prefixes like "PT ", "CV ", "UD " and convert to uppercase
        $cleanName = strtoupper(str_replace(['PT ', 'CV ', 'UD '], '', $name));

        // Split the name into words
        $words = explode(' ', $cleanName);

        $code = '';
        foreach ($words as $word) {
            // Take the first letter of each word that is not empty
            if (!empty($word)) {
                $code .= $word[0];
            }
        }

        // Limit the code length if it gets too long, for example, to 5 characters
        // You can adjust this logic based on your specific needs.
        return substr($code, 0, 5);
    }
}

