<h1>
    Activities tagged with
    <?= $this->Text->toList($tags) ?>
</h1>

<section>
<?php foreach ($activities as $activity): ?>
    <article>
        <!-- Use the HtmlHelper to create a link -->
        <h4><?= $this->Html->link($activity->title, $activity->url) ?></h4>
        <small><?= h($activity->url) ?></small>

        <!-- Use the TextHelper to format text -->
        <?= $this->Text->autoParagraph($activity->description) ?>
    </article>
<?php endforeach; ?>
</section>
