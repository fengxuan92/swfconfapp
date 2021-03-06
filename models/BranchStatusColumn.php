<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 */
class BranchStatusColumn extends \yii\grid\DataColumn
{
	/**
	 * @inheritdoc
	 */
	protected function renderDataCellContent($model, $key, $index)
	{
		if ($this->content === null) {
			$value=$model->lockUnlockReason();
			return $value;
		} else {
			return parent::renderDataCellContent($model, $key, $index);
		}
	}
	
}
