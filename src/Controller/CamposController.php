<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Campos Controller
 *
 * @property \App\Model\Table\CamposTable $Campos
 * @method \App\Model\Entity\Campo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CamposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $campos = $this->paginate($this->Campos);

        $this->set(compact('campos'));
    }

    /**
     * View method
     *
     * @param string|null $id Campo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campo = $this->Campos->get($id, [
            'contain' => ['Lotes'],
        ]);

        $this->set(compact('campo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campo = $this->Campos->newEmptyEntity();
        if ($this->request->is('post')) {
            $campo = $this->Campos->patchEntity($campo, $this->request->getData());
            if ($this->Campos->save($campo)) {
                $this->Flash->success(__('The campo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campo could not be saved. Please, try again.'));
        }
        $this->set(compact('campo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campo = $this->Campos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campo = $this->Campos->patchEntity($campo, $this->request->getData());
            if ($this->Campos->save($campo)) {
                $this->Flash->success(__('The campo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campo could not be saved. Please, try again.'));
        }
        $this->set(compact('campo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campo = $this->Campos->get($id);
        if ($this->Campos->delete($campo)) {
            $this->Flash->success(__('The campo has been deleted.'));
        } else {
            $this->Flash->error(__('The campo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
