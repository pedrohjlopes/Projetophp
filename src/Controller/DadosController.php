<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dados Controller
 *
 * @property \App\Model\Table\DadosTable $Dados
 *
 * @method \App\Model\Entity\Dado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DadosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $dados = $this->paginate($this->Dados);

        $this->set(compact('dados'));
    }

    /**
     * View method
     *
     * @param string|null $id Dado id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dado = $this->Dados->get($id, [
            'contain' => [],
        ]);

        $this->set('dado', $dado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dado = $this->Dados->newEntity();
        if ($this->request->is('post')) {
            $dado = $this->Dados->patchEntity($dado, $this->request->getData());
            if ($this->Dados->save($dado)) {
                $this->Flash->success(__('The dado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dado could not be saved. Please, try again.'));
        }
        $this->set(compact('dado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dado = $this->Dados->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dado = $this->Dados->patchEntity($dado, $this->request->getData());
            if ($this->Dados->save($dado)) {
                $this->Flash->success(__('The dado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dado could not be saved. Please, try again.'));
        }
        $this->set(compact('dado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dado = $this->Dados->get($id);
        if ($this->Dados->delete($dado)) {
            $this->Flash->success(__('The dado has been deleted.'));
        } else {
            $this->Flash->error(__('The dado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
