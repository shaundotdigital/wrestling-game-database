<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WeightClasses Controller
 *
 * @property \App\Model\Table\WeightClassesTable $WeightClasses
 */
class WeightClassesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $weightClasses = $this->paginate($this->WeightClasses);

        $this->set(compact('weightClasses'));
        $this->set('_serialize', ['weightClasses']);
    }

    /**
     * View method
     *
     * @param string|null $id Weight Class id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $weightClass = $this->WeightClasses->get($id, [
            'contain' => ['Wrestlers']
        ]);

        $this->set('weightClass', $weightClass);
        $this->set('_serialize', ['weightClass']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $weightClass = $this->WeightClasses->newEntity();
        if ($this->request->is('post')) {
            $weightClass = $this->WeightClasses->patchEntity($weightClass, $this->request->getData());
            if ($this->WeightClasses->save($weightClass)) {
                $this->Flash->success(__('The weight class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The weight class could not be saved. Please, try again.'));
        }
        $this->set(compact('weightClass'));
        $this->set('_serialize', ['weightClass']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Weight Class id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $weightClass = $this->WeightClasses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $weightClass = $this->WeightClasses->patchEntity($weightClass, $this->request->getData());
            if ($this->WeightClasses->save($weightClass)) {
                $this->Flash->success(__('The weight class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The weight class could not be saved. Please, try again.'));
        }
        $this->set(compact('weightClass'));
        $this->set('_serialize', ['weightClass']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Weight Class id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $weightClass = $this->WeightClasses->get($id);
        if ($this->WeightClasses->delete($weightClass)) {
            $this->Flash->success(__('The weight class has been deleted.'));
        } else {
            $this->Flash->error(__('The weight class could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
