<?php

namespace backend\controllers;

use common\models\TbPengunjung;
use common\models\TbPengunjungSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TbPengunjungController implements the CRUD actions for TbPengunjung model.
 */
class TbPengunjungController extends Controller
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
     * Lists all TbPengunjung models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbPengunjungSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbPengunjung model.
     * @param string $nik Nik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nik)
    {
        return $this->render('view', [
            'model' => $this->findModel($nik),
        ]);
    }

    /**
     * Creates a new TbPengunjung model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TbPengunjung();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nik' => $model->nik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbPengunjung model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nik Nik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nik)
    {
        $model = $this->findModel($nik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nik' => $model->nik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbPengunjung model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nik Nik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nik)
    {
        $this->findModel($nik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TbPengunjung model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nik Nik
     * @return TbPengunjung the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nik)
    {
        if (($model = TbPengunjung::findOne(['nik' => $nik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
