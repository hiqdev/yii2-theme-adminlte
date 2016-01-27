<li style="float:left; width: 33.33333%; padding: 5px;">
    <a href="javascript:void(0);" onclick="change_skin('<?= $data['attribute']; ?>')" class="clearfix full-opacity-hover"
       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
    <span
       class="clearfix full-opacity-hover">
        <div>
            <span style="display:block; width: 20%; float: left; height: 10px;" class="<?= $data['bg']; ?>-active"></span>
            <span class="<?= $data['bg']; ?>" style="display:block; width: 80%; float: left; height: 10px; "></span>
        </div>
        <div>
            <span style="display:block; width: 20%; float: left; height: 40px; background: #222d32;"></span>
            <span style="display:block; width: 80%; float: left; height: 40px; background: #f4f5f7;"></span>
        </div>
        <p class="text-center no-margin"><?= $data['label']; ?></p>
    </span>
    </a>
</li>