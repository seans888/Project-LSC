<?php

namespace frontend\controllers;

use Yii;
use common\models\Transaction;
use common\models\TransactionSearch;
use yii\web\Controller;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TransactionController implements the CRUD actions for Transaction model.
 */
class TransactionController extends Controller
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
     * Lists all Transaction models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TransactionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Transaction model.
     * @param integer $user_id
     * @param integer $review_class_id
     * @param integer $schedule_id
     * @return mixed
     */
    public function actionView($user_id, $review_class_id, $schedule_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($user_id, $review_class_id, $schedule_id),
        ]);
    }

    /**
     * Creates a new Transaction model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Transaction();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(Url::to('index.php?r=payment%2Fcreate'));
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Transaction model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $user_id
     * @param integer $review_class_id
     * @param integer $schedule_id
     * @return mixed
     */
    public function actionUpdate($user_id, $review_class_id, $schedule_id)
    {
        $model = $this->findModel($user_id, $review_class_id, $schedule_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user_id' => $model->user_id, 'review_class_id' => $model->review_class_id, 'schedule_id' => $model->schedule_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Transaction model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $user_id
     * @param integer $review_class_id
     * @param integer $schedule_id
     * @return mixed
     */
    public function actionDelete($user_id, $review_class_id, $schedule_id)
    {
        $this->findModel($user_id, $review_class_id, $schedule_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Transaction model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $user_id
     * @param integer $review_class_id
     * @param integer $schedule_id
     * @return Transaction the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($user_id, $review_class_id, $schedule_id)
    {
        if (($model = Transaction::findOne(['user_id' => $user_id, 'review_class_id' => $review_class_id, 'schedule_id' => $schedule_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
