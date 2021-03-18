<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tropas Controller
 *
 * @property \App\Model\Table\TropasTable $Tropas
 * @method \App\Model\Entity\Tropa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TropasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tropas = $this->paginate($this->Tropas);

        $this->set(compact('tropas'));
    }

    /**
     * View method
     *
     * @param string|null $id Tropa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tropa = $this->Tropas->get($id, [
            'contain' => ['Movimientos'],
        ]);

        $this->set(compact('tropa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tropa = $this->Tropas->newEmptyEntity();
        if ($this->request->is('post')) {
            $tropa = $this->Tropas->patchEntity($tropa, $this->request->getData());
            if ($this->Tropas->save($tropa)) {
                $this->Flash->success(__('The tropa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tropa could not be saved. Please, try again.'));
        }
        $this->set(compact('tropa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tropa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tropa = $this->Tropas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tropa = $this->Tropas->patchEntity($tropa, $this->request->getData());
            if ($this->Tropas->save($tropa)) {
                $this->Flash->success(__('The tropa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tropa could not be saved. Please, try again.'));
        }
        $this->set(compact('tropa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tropa id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tropa = $this->Tropas->get($id);
        if ($this->Tropas->delete($tropa)) {
            $this->Flash->success(__('The tropa has been deleted.'));
        } else {
            $this->Flash->error(__('The tropa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
