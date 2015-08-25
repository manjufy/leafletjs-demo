<?php

/**
 * Mark the locations those have bins.
 * The following locations are extracted from the places-of-interests.csv.
 * @return array
 */
function getBinLocations()
{
    return array (
        "Sekolah Seri Puteri",
        "RockSoft SDN BHD 0383193615",
        "R.E.A.L Kids",
        "Fire & Rescue Department",
        "Al-Mukalla 0383223722",
        //"Araxa (The Print House) 0383221339",
        //"E.C.L Laundry 0382130229",
        //"iP Studio Sdn Bhd 0383182176",
        "Chillout 03 8 3 2 0 9 8 8 2",
        //"Adam’s Laundry 0192509593",
        "Cristal Residence Sales Gallery 0 3 8 3 2 0 9 9 8 8",
        "SRK Cyberjaya",
        "Cyberjaya Properties 0 3 8 6 8 8 2 1 2 0",
        "Dedicated Transportation System (DTS)",
        "Citadines Dpulze",
        "Taska i-Play 0 3 8 3 1 8 6 5 1 1",
        "Starbucks",
        "Shaftsbury Residences",
        //"Anggrek Kuring 0383223067",
        //"Acacia 0383224355",
        "Affin Bank 0383181960",
        //"Rangeela 0383225542",
        "Little Caliphs Kindergarten",
        "Cempaka Sari Florist & Gifts 0383185022",
        "Puffy Buffy Pastry 0386010740",
        "elc International School",
        "Comelku Daycare",
        "Sepang Municipal Council",
        "Taska i-play @ Techzone",
        "Cyber City Manager",
        "Bayou Coffee House 0383180008",
        "Cyberview Resort & Spa",
        "Cyberview Childcare Centre"

    );
}

/**
 * Get Bin with types such as Paper, Plastic, Glass, Can and Battery.
 * @return array
 */
function getBinsWithTypes()
{
    // common combination
    /*
    $type1 = [
        "paper",
        "plastic",
        "glass",
        "can",
        "battery"
    ];

    // rare combination
    $type2 = [
        "paper",
        "plastic",
        "can"
    ];
    */
    // Reason for separation is that. Not all locations would have Glass and Battery bins. To identify the places with separate bin types, we just divide it to two types.
    $type1 = 1; // type1 is all bins [Paper, Plastic, Can, Glass and Battery
    $type2 = 2; // type2 is only Paper, Plastic and Can

    // Mark the places with Bin type ($type1 or $type2)
    return array (
        "Sekolah Seri Puteri" => $type2,
        "RockSoft SDN BHD 0383193615" => $type1,
        "R.E.A.L Kids" => array (),
        "Fire & Rescue Department" => $type2,
        "Al-Mukalla 0383223722" => $type2,
        //"Araxa (The Print House) 0383221339",
        //"E.C.L Laundry 0382130229",
        //"iP Studio Sdn Bhd 0383182176",
        "Chillout 03 8 3 2 0 9 8 8 2" => $type2,
        //"Adam’s Laundry 0192509593",
        "Cristal Residence Sales Gallery 0 3 8 3 2 0 9 9 8 8" => $type2,
        "SRK Cyberjaya" => $type2,
        "Cyberjaya Properties 0 3 8 6 8 8 2 1 2 0" => $type1,
        "Dedicated Transportation System (DTS)" => $type1,
        "Citadines Dpulze" => $type1,
        "Taska i-Play 0 3 8 3 1 8 6 5 1 1" => $type1,
        "Starbucks" => $type1,
        "Shaftsbury Residences" => $type1,
        //"Anggrek Kuring 0383223067",
        //"Acacia 0383224355",
        "Affin Bank 0383181960" => $type2,
        //"Rangeela 0383225542",
        "Little Caliphs Kindergarten" => $type2,
        "Cempaka Sari Florist & Gifts 0383185022" => $type2,
        "Puffy Buffy Pastry 0386010740" => $type1,
        "elc International School" => $type1,
        "Comelku Daycare" => $type2,
        "Sepang Municipal Council" => $type2,
        "Taska i-play @ Techzone" => $type1,
        "Cyber City Manager" => $type2,
        "Bayou Coffee House 0383180008" => $type1,
        "Cyberview Resort & Spa" => $type2,
        "Cyberview Childcare Centre" => $type2
    );
}

//sanitizeData();

function sanitizeData($fileName)
{
    $result = array ();

    $locations = csv_to_array($fileName);
    $newLocation = array ();
    foreach ($locations as $location) {
        //$newLocation[] = $location;
        if (in_array($location['COMPANY'], getBinLocations())) {
            $location['bin'] = true;
        } else {
            $location['bin'] = false;
        }

        $result[] = $location;
    }

    return $locations;
}

/**
 * Read the CSV, format result.
 * @param string $filename
 * @param string $delimiter
 * @return array|bool
 */
function csv_to_array($filename = '', $delimiter = ',')
{
    $result = array ();

    if (!file_exists($filename) || !is_readable($filename)) {
        return false;
    }

    $header = null;
    $data = array ();
    if (($handle = fopen($filename, 'r')) !== false) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
            if (!$header) {
                $header = $row;
            } else {
                $data[] = array_combine($header, $row);
            }
        }
        fclose($handle);
    }

    // format the result
    // As there are so many places, we only need to show Recycle bin in certain places, otherwise map would be filled with bins.
    foreach ($data as $location) {
        //$newLocation[] = $location;
        $bins = getBinsWithTypes();
        if (array_key_exists($location['COMPANY'], $bins)) {
            // Mark this place as there is a Recycle bin
            $location['bin'] = true;
            //
            $location['bin_type'] = $bins[$location['COMPANY']];
        } else {
            $location['bin'] = false;
            $location['bin_type'] = null;
        }

        $result[] = $location;
    }

    return $result;
}