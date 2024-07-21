<?php

namespace backend\controllers;

use common\models\TbKamar;
use common\models\TbKamarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TbKamarController implements the CRUD actions for TbKamar model.
 */
class TbKamarController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TbKamar models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbKamarSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbKamar model.
     * @param string $no_kamar No Kamar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_kamar)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_kamar),
        ]);
    }

    /**
     * Creates a new TbKamar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TbKamar();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_kamar' => $model->no_kamar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbKamar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_kamar No Kamar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_kamar)
    {
        $model = $this->findModel($no_kamar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_kamar' => $model->no_kamar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbKamar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_kamar No Kamar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_kamar)
    {
        $this->findModel($no_kamar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TbKamar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_kamar No Kamar
     * @return TbKamar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_kamar)
    {
        if (($model = TbKamar::findOne(['no_kamar' => $no_kamar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
