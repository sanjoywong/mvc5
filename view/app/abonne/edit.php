
<div class="editAbonne">
    <form action="" method="post" novalidate>
        <?=$form->label('nom'); ?>
        <?=$form->input('nom'); ?>
        <?=$form->error('nom'); ?>

        <?=$form->label('prenom'); ?>
        <?=$form->input('prenom'); ?>
        <?=$form->error('prenom'); ?>

        <?=$form->label('email'); ?>
        <?=$form->input('email','email'); ?>
        <?=$form->error('email'); ?>

        <?=$form->label('age'); ?>
        <?=$form->input('age','number'); ?>
        <?=$form->error('age'); ?>

        <?=$form->submit(); ?>
    </form >
</div>