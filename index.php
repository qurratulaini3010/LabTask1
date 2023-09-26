<?php
// Define the multidimensional array to store criteria and items
$evaluationCriteria = array(
    1 => array(
        'Num' => 1,
        'Criteria Evaluation' => 'Introduction',
        'Score' => '',
        1 => array(
            'a. The variety of pitches in the competition was' => 5,
            'b. The preparedness of the contestants was' => 5
        )
    ),
    2 => array(
        'Num' => 2,
        'Criteria Evaluation' => 'Analisis',
        'Score' => '',
        1 => array(
            'a. The stage format and room layout was' => 5,
            'b. The competition schedule for the mentor sessions and first round was' => 5,
            'c. The final round scoring format was' => 10
        )
    ),
    3 => array(
        'Num' => 3,
        'Criteria Evaluation' => 'Ending',
        'Score' => '',
        1 => array(
            'a. The attendance for the final round of the competition was' => 10,
            'b. Pre-conference communication with SXSW Gaming staff was' => 10,
            'c. On-site service by SXSW Gaming staff/volunteers was' => 5
        )
    )
);

// Function to count the number of rows needed for criteria
function countRows($criteria)
{
    return count($criteria[1]) + 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        th:first-child, td:first-child {
            text-align: center;
        }
    </style>
    <title>Proposal Evaluation</title>
</head>
<body>
<table>
    <tr>
        <th>NO</th>
        <th>Criteria</th>
        <th>Item</th>
        <th>SCORE</th>
    </tr>
    <?php
    $rowNumber = 1;
    foreach ($evaluationCriteria as $criteria) {
        $totalItems = count($criteria[1]);

        echo "<tr>";
        echo '<td rowspan="' . ($totalItems + 1) . '">' . $criteria['Num'] . '</td>';
        echo '<td colspan="3"><strong>' . $criteria['Criteria Evaluation'] . '</strong></td>';
        echo '</tr>';
        foreach ($criteria[1] as $item => $score) {
            echo '<tr>';
            echo '<td></td>'; // Empty cell for NO
            echo '<td>' . $item . '</td>';
            echo '<td>' . $score . '</td>';
            echo '</tr>';
        }
        $rowNumber++;
    }
    ?>
</table>
</body>
</html>



