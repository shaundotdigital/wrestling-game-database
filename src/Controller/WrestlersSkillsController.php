<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WrestlersSkills Controller
 *
 * @property \App\Model\Table\WrestlersSkillsTable $WrestlersSkills
 */
class WrestlersSkillsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wrestlers', 'Skills']
        ];
        $wrestlersSkills = $this->paginate($this->WrestlersSkills);

        $this->set(compact('wrestlersSkills'));
        $this->set('_serialize', ['wrestlersSkills']);
    }

    /**
     * View method
     *
     * @param string|null $id Wrestlers Skill id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wrestlersSkill = $this->WrestlersSkills->get($id, [
            'contain' => ['Wrestlers', 'Skills']
        ]);

        $this->set('wrestlersSkill', $wrestlersSkill);
        $this->set('_serialize', ['wrestlersSkill']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wrestlersSkill = $this->WrestlersSkills->newEntity();
        if ($this->request->is('post')) {
            $wrestlersSkill = $this->WrestlersSkills->patchEntity($wrestlersSkill, $this->request->getData());
            if ($this->WrestlersSkills->save($wrestlersSkill)) {
                $this->Flash->success(__('The wrestlers skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wrestlers skill could not be saved. Please, try again.'));
        }
        $wrestlers = $this->WrestlersSkills->Wrestlers->find('list', ['limit' => 200]);
        $skills = $this->WrestlersSkills->Skills->find('list', ['limit' => 200]);
        $this->set(compact('wrestlersSkill', 'wrestlers', 'skills'));
        $this->set('_serialize', ['wrestlersSkill']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wrestlers Skill id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wrestlersSkill = $this->WrestlersSkills->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wrestlersSkill = $this->WrestlersSkills->patchEntity($wrestlersSkill, $this->request->getData());
            if ($this->WrestlersSkills->save($wrestlersSkill)) {
                $this->Flash->success(__('The wrestlers skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wrestlers skill could not be saved. Please, try again.'));
        }
        $wrestlers = $this->WrestlersSkills->Wrestlers->find('list', ['limit' => 200]);
        $skills = $this->WrestlersSkills->Skills->find('list', ['limit' => 200]);
        $this->set(compact('wrestlersSkill', 'wrestlers', 'skills'));
        $this->set('_serialize', ['wrestlersSkill']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wrestlers Skill id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wrestlersSkill = $this->WrestlersSkills->get($id);
        if ($this->WrestlersSkills->delete($wrestlersSkill)) {
            $this->Flash->success(__('The wrestlers skill has been deleted.'));
        } else {
            $this->Flash->error(__('The wrestlers skill could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
