<?php
    use App\Repository\AnimelistRepository;

    $test = new AnimelistRepository;

    echo $test->findFilteredData("2021", "autumn");