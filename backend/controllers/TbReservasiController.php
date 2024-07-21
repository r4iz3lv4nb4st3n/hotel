<?php

namespace backend\controllers;

use common\models\TbReservasi;
use common\models\TbReservasiSearch;
use common\models\TbKamar;
use common\models\TbPengunjung;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TbReservasiController implements the CRUD actions for TbReservasi model.
 */
class TbReservasiController extends Controller
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
     * Lists all TbReservasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbReservasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbReservasi model.
     * @param string $id_reservasi Id Reservasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_reservasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_reservasi),
        ]);
    }

    /**
     * Creates a new TbReservasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TbReservasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_reservasi' => $model->id_reservasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        $kamar = TbKamar::find()->select(['no_kamar','no_kamar'])->indexBy('no_kamar')->column();
        $pengunjung = TbPengunjung::find()->select(['nik','nik'])->indexBy('nik')->column();

        return $this->render('create', [
            'model' => $model,
            'kamar' => $kamar,
            'pengunjung' => $pengunjung,
        ]);
    }

    /**
     * Updates an existing TbReservasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_reservasi Id Reservasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_reservasi)
    {
        $model = $this->findModel($id_reservasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_reservasi' => $model->id_reservasi]);
        }

        $pengunjung = TbPengunjung::find()->select(['nik','nik'])->indexBy('nik')->column();
        $kamar = TbKamar::find()->select(['no_kamar','no_kamar'])->indexBy('no_kamar')->column();

        return $this->render('update', [
            'model' => $model,
            'kamar' => $kamar,
            'pengunjung' => $pengunjung,
        ]);
    }

    /**
     * Deletes an existing TbReservasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_reservasi Id Reservasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_reservasi)
    {
        $this->findModel($id_reservasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TbReservasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_reservasi Id Reservasi
     * @return TbReservasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_reservasi)
    {
        if (($model = TbReservasi::findOne(['id_reservasi' => $id_reservasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
