<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Log\Log;

/**
 * AttributesPoints Controller
 *
 * @property \App\Model\Table\AttributesPointsTable $AttributesPoints
 */
class AttributesPointsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wrestlers', 'Attributes']
        ];
        $attributesPoints = $this->paginate($this->AttributesPoints);

        $this->set(compact('attributesPoints'));
        $this->set('_serialize', ['attributesPoints']);
    }

    /**
     * View method
     *
     * @param string|null $id Attributes Point id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attributesPoint = $this->AttributesPoints->get($id, [
            'contain' => ['Wrestlers', 'Attributes']
        ]);

        $this->set('attributesPoint', $attributesPoint);
        $this->set('_serialize', ['attributesPoint']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attributesPoint = $this->AttributesPoints->newEntity();
        $tempWres = $this->AttributesPoints->Wrestlers->get(1);
        if ($this->request->is('post')) {

            $entities = $this->AttributesPoints->newEntities($this->request->getData());

            //$attributesPoint = $this->AttributesPoints->patchEntity($attributesPoint, $this->request->getData());
            Log::write('debug', $entities);

            if ($this->AttributesPoints->saveMany($entities)) {
                $this->Flash->success(__('The attributes point has been saved.'));

                return $this->redirect(['controller' => 'wrestlers', 'action' => 'editattributes', 1]);
            }
            $this->Flash->error(__('The attributes point could not be saved. Please, try again.'));
        }
        $wrestlers = $this->AttributesPoints->Wrestlers->find('list', ['limit' => 200]);
        $attributes = $this->AttributesPoints->Attributes->find();
        $this->set(compact('attributesPoint', 'wrestlers', 'attributes', 'tempWres'));
        $this->set('_serialize', ['attributesPoint']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Attributes Point id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attributesPoint = $this->AttributesPoints->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attributesPoint = $this->AttributesPoints->patchEntity($attributesPoint, $this->request->getData());
            if ($this->AttributesPoints->save($attributesPoint)) {
                $this->Flash->success(__('The attributes point has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attributes point could not be saved. Please, try again.'));
        }
        $wrestlers = $this->AttributesPoints->Wrestlers->find('list', ['limit' => 200]);
        $attributes = $this->AttributesPoints->Attributes->find('list', ['limit' => 200]);
        $this->set(compact('attributesPoint', 'wrestlers', 'attributes'));
        $this->set('_serialize', ['attributesPoint']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Attributes Point id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attributesPoint = $this->AttributesPoints->get($id);
        if ($this->AttributesPoints->delete($attributesPoint)) {
            $this->Flash->success(__('The attributes point has been deleted.'));
        } else {
            $this->Flash->error(__('The attributes point could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
