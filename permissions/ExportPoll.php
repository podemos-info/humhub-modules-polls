<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\polls\permissions;

use humhub\modules\space\models\Space;

/**
 * CreatePost Permission
 */
class ExportPoll extends \humhub\libs\BasePermission
{

    /**
     * @inheritdoc
     */
    public $defaultAllowedGroups = [
        Space::USERGROUP_OWNER,
        Space::USERGROUP_ADMIN,
    ];
    
    /**
     * @inheritdoc
     */
    protected $fixedGroups = [
        Space::USERGROUP_USER
    ];

    /**
     * @inheritdoc
     */
    protected $title = "Export poll";

    /**
     * @inheritdoc
     */
    protected $description = "Allows the user to export polls";

    /**
     * @inheritdoc
     */
    protected $moduleId = 'polls';

}
