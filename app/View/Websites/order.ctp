
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">並び替え</div>
    </div>
    <div class="block-content collapse in">
        <ol class="sortable">
            <?php foreach ($websites as $website): ?>
            <li id="<?php echo $website['Website']['id']; ?>"><?php echo $website['Website']['name']; ?></li>
            <?php endforeach; ?>
        </ol>
        <?php echo $this->Form->create('null', array('class'=>'form-horizontal', 'url' => array('controller' => 'Websites', 'action' => 'order'))); ?>
            <input id="websiteIdsHiddenField" type="hidden" name="website_ids" />

		<?php echo $this->Form->submit('決定', array('class' => 'btn btn-primary', 'title' => 'Submit')); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<script>
$(function() {
    var $hiddenField = $('#websiteIdsHiddenField');
    $('.sortable').sortable({
        update: setWebsiteIds
    });
    function setWebsiteIds() {
        $hiddenField.val($('.sortable').sortable('toArray'));
    }
    setWebsiteIds();
});
</script>

<style>
.sortable li {
    height: 30px;
    line-height: 30px;
    border-bottom: solid 1px #ccc;
    background-color: #fff;
    cursor: move;
}
.sortable li:hover {
    background-color: #ddd;
}
</style>
