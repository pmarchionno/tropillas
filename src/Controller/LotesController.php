<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lotes Controller
 *
 * @property \App\Model\Table\LotesTable $Lotes
 * @method \App\Model\Entity\Lote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LotesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Campos'],
        ];
        $lotes = $this->paginate($this->Lotes);

        $this->set(compact('lotes'));
    }

    /**
     * View method
     *
     * @param string|null $id Lote id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lote = $this->Lotes->get($id, [
            'contain' => ['Campos'],
        ]);

        $this->set(compact('lote'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lote = $this->Lotes->newEmptyEntity();
        if ($this->request->is('post')) {
            $lote = $this->Lotes->patchEntity($lote, $this->request->getData());
            if ($this->Lotes->save($lote)) {
                $this->Flash->success(__('The lote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lote could not be saved. Please, try again.'));
        }
        $campos = $this->Lotes->Campos->find('list', ['limit' => 200]);
        $this->set(compact('lote', 'campos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lote id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lote = $this->Lotes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lote = $this->Lotes->patchEntity($lote, $this->request->getData());
            if ($this->Lotes->save($lote)) {
                $this->Flash->success(__('The lote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lote could not be saved. Please, try again.'));
        }
        $campos = $this->Lotes->Campos->find('list', ['limit' => 200]);
        $this->set(compact('lote', 'campos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lote id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lote = $this->Lotes->get($id);
        if ($this->Lotes->delete($lote)) {
            $this->Flash->success(__('The lote has been deleted.'));
        } else {
            $this->Flash->error(__('The lote could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
