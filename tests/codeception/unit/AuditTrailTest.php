<?php

namespace tests\codeception\unit;

use goenergies\yii2\audit\models\AuditEntry;
use goenergies\yii2\audit\models\AuditTrail;
use Codeception\Specify;

/**
 * AuditTrailTest
 */
class AuditTrailTest extends AuditTestCase
{

    public function testGetEntry()
    {
        $trail = AuditTrail::findOne(1);
        $this->assertEquals($trail->getEntry()->one()->className(), AuditEntry::className());
    }

}