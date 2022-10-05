<?php
if (!empty($guest['accomodations'])) {
    if ($guest['accomodations'] == "no") {
        $no = "checked";

    } else {
        $yes = "checked";
    }

}

if (!empty($guest['seating'])) {
    if ($guest['seating'] == "non-smoking") {
        $nonsmoking = "checked";
    } else if ($guest['seating'] == "smoking") {
        $smoking = "checked";
    } else {
        $nopref = "checked";
    }

}

