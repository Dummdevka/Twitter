<?php

$this->view('partials/header', ['title' => 'There was an error!']);

?>
<h1>An error occurred!</h1>
<hr>
<p><?= $exception->getMessage() ?></p>

<?php $this->view('partials/footer');
