<?php

use hiqdev\thememanager\widgets\CopyrightYears;
use hiqdev\thememanager\widgets\OrganizationLink;
use hiqdev\thememanager\widgets\PoweredBy;

?>
<footer class="main-footer">
    <div class="pull-right hidden-xs"><?= PoweredBy::widget() ?></div>
    <strong>&copy; <?= CopyrightYears::widget() ?> <?= OrganizationLink::widget() ?></strong>. All rights reserved.
</footer>
