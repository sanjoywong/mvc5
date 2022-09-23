
<div class="editAbonne">
    <form action="" method="post" novalidate>
        <?=$form->label('titre'); ?>
        <?=$form->input('titre'); ?>
        <?=$form->error('titre'); ?>

        <?=$form->label('reference'); ?>
        <?=$form->input('reference'); ?>
        <?=$form->error('reference'); ?>

        <?=$form->label('description'); ?>
        <?=$form->input('description'); ?>
        <?=$form->error('description'); ?>

        <?=$form->submit(); ?>
    </form >
</div>