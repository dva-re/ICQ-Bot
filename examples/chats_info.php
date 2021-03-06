<html lang="ru">
<body style="text-align:center;background: gray">
<?php

use Antson\IcqBot\Entities\ChatInfoGroup;

require_once "../vendor/autoload.php";
require_once "config.php";

try {
    $icq = new Antson\IcqBot\Client(TOKEN);
    $info = $icq->chatGetInfo(DEBUG_UIN);
    if ($info->isOk()) {
        ?>
        <div style="padding:16px;background: white;width:480px;margin: 0 auto; border:1px solid darkgrey">
            <h1><?= $info->get_firstName() ?> <?= $info->get_lastName() ?> [<?= $info->get_type() ?>]</h1>
            <h2 style="color:grey">@<?= $info->get_nick() ?></h2>
            <p><?= $info->get_about() ?></p>
        </div>
        <?php
    }

    $info = $icq->chatGetInfo($icq->myUIN());
    if ($info->isOk()) {
        ?>
        <div style="padding:16px;background: white;width:480px;margin: 0 auto; border:1px solid darkgrey">
            <h1><?= $info->get_firstName() ?> <?= $info->get_lastName() ?> [<?= $info->get_type() ?>]</h1>
            <h2 style="color:grey">@<?= $info->get_nick() ?></h2>
            <p><?= $info->get_about() ?></p>
        </div>
        <?php
    }

    /** @var ChatInfoGroup $info_group */
    $info_group = $icq->chatGetInfo(DEBUG_CHAT_ID);
    if ($info_group->isOk()) {
        ?>
        <div style="padding:16px;background: white;width:480px;margin: 0 auto; border:1px solid darkgrey">
            <h1><?= $info_group->get_title() ?> [<?= $info_group->get_type() ?>]</h1>
            <p><a href="<?= $info_group->get_inviteLink() ?>">Join</a></p>
            <p><?= $info_group->get_about() ?></p>
            <p><?= $info_group->get_rules() ?></p>
        </div>
        <?php
    }

// с картинками пока не понятно
    ?>
    <?php

} catch (Exception $e) {
    echo $e->getMessage();
}

?>
</body>
</html>

