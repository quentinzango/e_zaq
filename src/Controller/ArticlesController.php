<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 */
class ArticlesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Articles->find()
            ->contain(['Users', 'Subcategories']);
        $articles = $this->paginate($query);

        $this->set(compact('articles'));
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $article = $this->Articles->get($id, contain: ['Users', 'Subcategories']);
        $this->set(compact('article'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $article = $this->Articles->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            // Vérifiez si un fichier est fourni
            $file = $data['image'];
            if ($file && $file->getError() === UPLOAD_ERR_OK) {
                $fileName = time() . '_' . $file->getClientFilename(); // Créez un nom unique
                $uploadPath = WWW_ROOT . 'img/uploads/';
                $file->moveTo($uploadPath . $fileName); // Déplacez le fichier
                $data['image'] = 'img/uploads/' . $fileName; // Stockez le chemin relatif
            } else {
                $data['image'] = null; // Pas de fichier téléchargé
            }

            $article = $this->Articles->patchEntity($article, $data);
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }

            // Debug des erreurs si la sauvegarde échoue
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
            debug($article->getErrors());
        }


        $users = $this->Articles->Users->find('list', ['limit' => 200]);
        $subcategories = $this->Articles->Subcategories->find('list', ['limit' => 200]);
        $this->set(compact('article', 'users', 'subcategories'));
    }



    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $article = $this->Articles->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $users = $this->Articles->Users->find('list', ['limit'=> 200])->all();
        $subcategories = $this->Articles->Subcategories->find('list', ['limit'=> 200])->all();
        $this->set(compact('article', 'users', 'subcategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function viewarticle($id)
    {
        $article = $this->Articles->get($id);

        $this->set(compact('article'));
    }

    




    // Exemple dans ArticlesController.php

    public function search()
    {
        $searchTerm = $this->request->getData('search'); // Terme de recherche

        // Rechercher les articles par nom
        $articlesQuery = $this->Articles->find('all')
            ->contain(['Subcategories'])
            ->where(['Articles.name LIKE' => '%' . $searchTerm . '%']);

        // Si la recherche concerne une sous-catégorie, vérifier si subcategorie_id existe
        if ($this->request->getData('subcategorie_id')) {
            $subcategoryId = $this->request->getData('subcategorie_id');
            if ($subcategoryId) {
                $articlesQuery->where(['Articles.subcategorie_id' => $subcategoryId]);
            }
        }

        // Exécuter la requête
        $articles = $articlesQuery->all();
        $this->set(compact('articles'));
    }
}
