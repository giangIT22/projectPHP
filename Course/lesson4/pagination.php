<?php

    echo '<table border="1" width="800">';
    echo '<tr>
            <td>#ID</td>
            <td>Name</td>   
            <td>Email</td>
        </tr>';

    $limit = 50;
    $totalStudents = 1000;
    $totalPage = $totalStudents/$limit;
    $currentPage = $_GET['page'] ?? 1;
    $start = ($currentPage - 1) * $limit;
    $start += 1;

    $newLimit = $limit * $currentPage;

    for ($start; $start <= $newLimit; $start++) {
        echo '<tr>';
        echo "<td>${start}</td>";
        echo "<td>Student name is ${start}</td>";
        echo "<td>studentemail${start}@gmail.com</td>";
        echo '</tr>';
    }

    echo '</table>';

    echo '<div class="paginate">';
    for ($page = 1; $page <= $totalPage; $page++) {
        $active = $page == $currentPage ? 'active' : '';
        echo "<a href='pagination.php?page=${page}' class='${active}'>${page}</a>";
    }
    echo '</div>';
?>

<style>
    .paginate {
        margin-top: 10px;
        float: left;
    }

    a {
        text-decoration: none;
        display: block;
        float: left;
        padding: 5px;
        margin-right: 5px;
        background: #ccc;
        text-align: center;
        margin-bottom: 5px;
    }

    .active {
        color: red;
    }
</style>