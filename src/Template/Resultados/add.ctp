<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Resultados'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="resultados form large-10 medium-9 columns">
    <?= $this->Form->create($resultado); ?>
    <fieldset>
        <legend><?= __('Add Resultado') ?></legend>
        <?php
            echo $this->Form->input('ID_EJERCICIO');
            echo $this->Form->input('ACIERTOS');
            echo $this->Form->input('FALLOS');
            echo $this->Form->input('PUNTAJE');
            echo $this->Form->input('TIEMPO_TOTAL');
            echo $this->Form->input('TOTAL_PREGUNTAS');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
