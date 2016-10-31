<?php

namespace frontend\controllers;

use Yii;
use common\models\Student;
use common\models\StudentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;




/**
 * StudentController implements the CRUD actions for Student model.
 */
class StudentController extends Controller
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
     * Lists all Student models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Student model.
     * @param integer $id
     * @param integer $review_class_id
     * @param integer $schedule_id
     * @param integer $user_id
     * @return mixed
     */
    public function actionView($id, $review_class_id, $schedule_id, $user_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $review_class_id, $schedule_id, $user_id),
        ]);
    }

    /**
     * Creates a new Student model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Student();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'review_class_id' => $model->review_class_id, 
                'schedule_id' => $model->schedule_id, 'user_id' => $model->user_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Student model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $review_class_id
     * @param integer $schedule_id
     * @param integer $user_id
     * @return mixed
     */
    public function actionUpdate($id, $review_class_id, $schedule_id, $user_id)
    {
        $model = $this->findModel($id, $review_class_id, $schedule_id, $user_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'review_class_id' => $model->review_class_id,
             'schedule_id' => $model->schedule_id, 'user_id' => $model->user_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Student model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $review_class_id
     * @param integer $schedule_id
     * @param integer $user_id
     * @return mixed
     */
    public function actionDelete($id, $review_class_id, $schedule_id, $user_id)
    {
        $this->findModel($id, $review_class_id, $schedule_id, $user_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Student model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $review_class_id
     * @param integer $schedule_id
     * @param integer $user_id
     * @return Student the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
     protected function findModel($id, $review_class_id, $schedule_id, $user_id)
    {
        if (($model = Student::findOne(['id' => $id, 'review_class_id' => $review_class_id, 'schedule_id' => $schedule_id, 'user_id' => $user_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

/*
    protected function findModel($id, $review_class_id, $schedule_id, $user_id)
    {row new NotFoundHttpException('The requested page does not exist.');
        }
        if (($model = Student::findOne(['id' => $id, 'review_class_id' => $review_class_id, 'schedule_id' => $schedule_id, 'user_id' => $user_id])) !== null) {
            return $model;
        } else {
             throw new NotFoundHttpException('The requested page does not exist.');
    }
*/
}
