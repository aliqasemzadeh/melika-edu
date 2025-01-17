<?php
$questions = [
  0 => [
      'question' => '10+5=?',
      'options' => [15,5,3,2],
      'answer' => 0,
  ],
    1 => [
        'question' => '2!=?',
        'options' => [4,3,5,2],
        'answer' => 3,
    ],

    2 => [
        'question' => '2*2=?',
        'options' => [1,3,4,2],
        'answer' => 2,
    ],

    3 => [
        'question' => '2/2=?',
        'options' => [1,3,4,2],
        'answer' => 0,
    ],
];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


    <div class="container">
        <h1>Melika Edu

            <?php if(time() > 1725946282) { ?>
                Expired Exam
           <?php  } ?>

        </h1>
        <form action="result.php" method="post">
            <?php $n = 1; ?>
            <?php foreach ($questions as $qkey => $question): ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <h3><?php echo $n; $n++; ?>)<?php echo $question['question']; ?></h3>
                        <?php foreach ($question['options'] as $key => $option): ?>
                        <div class="form-check">
                            <input class="form-check-input" value="<?php echo $key; ?>" type="radio" name="options_<?php echo $qkey; ?>" id="options_<?php echo $qkey; ?>_<?php echo $key; ?>">
                            <label class="form-check-label" for="options_<?php echo $qkey; ?>_<?php echo $key; ?>">
                                <?php echo $option; ?>
                            </label>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
