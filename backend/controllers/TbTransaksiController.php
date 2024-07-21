<?php

namespace backend\controllers;

use common\models\TbTransaksi;
use common\models\TbTransaksiSearch;
use common\models\TbReservasi;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TbTransaksiController implements the CRUD actions for TbTransaksi model.
 */
class TbTransaksiController extends Controller
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
     * Lists all TbTransaksi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbTransaksiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbTransaksi model.
     * @param string $id_transaksi Id Transaksi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_transaksi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_transaksi),
        ]);
    }

    /**
     * Creates a new TbTransaksi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TbTransaksi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_transaksi' => $model->id_transaksi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        $reservasi = TbReservasi::find()->select(['id_reservasi','id_reservasi'])->indexBy('id_reservasi')->column();

        return $this->render('create', [
            'model' => $model,
            'reservasi' => $reservasi,
        ]);

      
    }

    /**
     * Updates an existing TbTransaksi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_transaksi Id Transaksi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_transaksi)
    {
        $model = $this->findModel($id_transaksi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_transaksi' => $model->id_transaksi]);
        }

        $reservasi = TbReservasi::find()->select(['id_reservasi','id_reservasi'])->indexBy('id_reservasi')->column();

        return $this->render('update', [
            'model' => $model,
            'reservasi' => $reservasi,
        ]);
    }

    /**
     * Deletes an existing TbTransaksi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_transaksi Id Transaksi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_transaksi)
    {
        $this->findModel($id_transaksi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TbTransaksi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_transaksi Id Transaksi
     * @return TbTransaksi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_transaksi)
    {
        if (($model = TbTransaksi::findOne(['id_transaksi' => $id_transaksi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    
}
