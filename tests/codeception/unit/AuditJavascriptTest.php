<?php

namespace tests\codeception\unit;

use goenergies\yii2\audit\models\AuditEntry;
use goenergies\yii2\audit\models\AuditJavascript;
use Codeception\Specify;

/**
 * AuditJavascriptTest
 */
class AuditJavascriptTest extends AuditTestCase
{

    public function testGetEntry()
    {
        $javascript = AuditJavascript::findOne(1);
        $this->assertEquals($javascript->getEntry()->one()->className(), AuditEntry::className());
    }

}