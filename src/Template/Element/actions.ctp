<ul class="side-nav">
    <li class="heading"><?php echo __('Actions');?></li>
    <li><?php echo $this->Html->link(__('New ') . $type,    ['action' => 'add']); ?></li>
    <li><?php echo $this->Html->link(__('List ') . $typePlurals,    ['action' => 'index']); ?></li>
</ul>