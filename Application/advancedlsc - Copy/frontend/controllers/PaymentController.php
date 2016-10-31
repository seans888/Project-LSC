<?php

namespace frontend\controllers;

use Yii;
use common\models\Payment;
use common\models\PaymentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\depositSlip;

/**
 * PaymentController implements the CRUD actions for Payment model.
 */
class PaymentController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Payment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PaymentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Payment model.
     * @param integer $student_id
     * @param integer $review_class_id
     * @return mixed
     */
    public function actionView($student_id, $review_class_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($student_id, $review_class_id),
        ]);
    }

    /**
     * Creates a new Payment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Payment();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

             // get the instance of the uploaded file
            $imageName = $model->student_id;
            $model->file=UploadedFile::getInstance($model,'file');
            $model->file->saveAs('depositSlip/'.$imageName.'.'.$model->file->extension);

            //save the path in db column
            $model->payment = 'depositSlip/'.$imageName.'.'.$model->file->extension;
           
            return $this->redirect(['view', 'student_id' => $model->student_id, 'review_class_id' => $model->review_class_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Payment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $student_id
     * @param integer $review_class_id
     * @return mixed
     */
    public function actionUpdate($student_id, $review_class_id)
    {
        $model = $this->findModel($student_id, $review_class_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'student_id' => $model->student_id, 'review_class_id' => $model->review_class_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Payment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $student_id
     * @param integer $review_class_id
     * @return mixed
     */
    public function actionDelete($student_id, $review_class_id)
    {
        $this->findModel($student_id, $review_class_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Payment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $student_id
     * @param integer $review_class_id
     * @return Payment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($student_id, $review_class_id)
    {
        if (($model = Payment::findOne(['student_id' => $student_id, 'review_class_id' => $review_class_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
