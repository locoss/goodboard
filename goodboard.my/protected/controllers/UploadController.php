<?php

class UploadController extends Controller
{
    function actionIndex()
    {
            $dir = yii::getPathOfAlias('application.uploads');
            $uploaded = false;
            $model = new Upload();
            if (isset($_POST['Upload'])){
                $model->attributes = $_POST['Upload'];
                $file = CUploadedFile::getInstance($model, 'file');
                if($model->validate()){
                    $uploaded = $file->saveAs($dir . '/' . $file->getName());
                    $file_dir = (yii::app()->baseUrl . '/' . $file->getName());
                }
            }
            $this->render('index', array(
                'model' => $model,
                'uploaded' => $uploaded,
                'dir' => $dir,
                ));
            
    }
}