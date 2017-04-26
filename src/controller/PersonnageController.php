<?php


namespace air_de_rien\controller;


use air_de_rien\model\DB;
use air_de_rien\form\PersonnageFilter;
use air_de_rien\form\PersonnageForm;
use air_de_rien\model\Personnage;
use air_de_rien\model\PersonnageRequete;


class PersonnageController extends Controller
{

    public function index()
    {
        $form = new PersonnageForm();
        $filter = new PersonnageFilter();
        $form->setInputFilter($filter);

        $requete = new PersonnageRequete();
        $db = new DB();

        $personnages = $requete->findAll('personnage');
        $personnage = new Personnage();
        $spectacles = $db->findAll('spectacle');
        $membres = $db->findAll('membre');

        return $this->getTwig()
            ->render('admin/PersonnageView.html.twig',
                ['personnages' => $personnages,
                    'personnage' => $personnage,
                    'spectacles' => $spectacles,
                    'membres' => $membres,
                    'typeAction' => 'add',
                    'titreButton' => 'Ajouter',
                    'form' => $form]);
    }

    public function addPersonnage()
    {
        $form = new PersonnageForm();
        $filter = new PersonnageFilter();
        $form->setInputFilter($filter);

        $requete = new PersonnageRequete();
        $db = new DB();


            if (!empty($_POST)) {
                foreach ($_POST as $key => $val) {
                    $postClean[$key] = trim($val);
            }




            if ($_FILES['photoPersonnage']['name'] != '') {
                $errors = array();
                $file_name = $_FILES['photoPersonnage']['name'];
                $file_tmp = $_FILES['photoPersonnage']['tmp_name'];
                $path_parts = pathinfo($file_name);
                $file_ext = $path_parts['extension'];
                $newFileName = rand(0, 1000000) . '.' . $file_ext;

                $extensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $extensions) === false) {
                    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";

                }

                if (empty($errors)) {

                    move_uploaded_file($file_tmp, "images/photos/" . $newFileName);
                    $postClean['photoPersonnage'] = $newFileName;
                    echo "Success";
                } else {
                    print_r($errors);
                }
            }
            $requete->addPersonnage($postClean);
            header('Location:admin.php?route=showPersonnage');
        }

        $personnages = $requete->findAll('personnage');
        $personnage = new Personnage();
        $spectacles = $db->findAll('spectacle');
        $membres = $db->findAll('membre');


        return $this->getTwig()
            ->render('admin/PersonnageView.html.twig',
                ['personnages' => $personnages,
                    'form' => $form,
                    'personnage' => $personnage,
                    'spectacles' => $spectacles,
                    'membres' => $membres,
                    'titreButton' => 'Ajouter',
                    'typeAction' => 'add'
                ]);
    }

    public function deletePersonnage()
    {
        $del = new PersonnageRequete();
        $del->deletePersonnage();
        header('Location:admin.php?route=showPersonnage');
    }

    public function doUpdatePersonnage()
    {
        if (!empty($_POST)) {
            $requete = new PersonnageRequete();

            $personnage = $requete->findOne('personnage', $_POST['id']);


            foreach ($_POST as $key => $val) {
                $postClean[$key] = trim($val);

            }

            if ($_FILES['photoPersonnage']['name'] != '') {
                $errors = array();
                $file_name = $_FILES['photoPersonnage']['name'];
                $file_tmp = $_FILES['photoPersonnage']['tmp_name'];
                $path_parts = pathinfo($file_name);
                $file_ext = $path_parts['extension'];

                $extensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $extensions) === false) {
                    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";

                }

                if (empty($errors)) {
                    $file_name = '';
                    move_uploaded_file($file_tmp, 'images/photos/' . $file_name);
                    $postClean['photoPersonnage'] = $file_name;
                    echo "Success";
                } else {
                    print_r($errors);
                }
            }

            $requete->updatePersonnage($postClean);
            header('Location:admin.php?route=showPersonnage');
        }
    }



    public function updatePersonnage($id)
    {
        $form = new PersonnageForm();
        $filter = new PersonnageFilter();
        $form->setInputFilter($filter);

        $requete = new PersonnageRequete();
        $db = new DB();

        $personnages = $requete->findAll('personnage');
        $personnage = $requete->findOne('personnage', $id);
        $spectacles = $db->findAll('spectacle');
        $membres = $db->findAll('membre');


        return $this->getTwig()
            ->render('admin/PersonnageView.html.twig',
                ['personnages' => $personnages,
                    'form' => $form,
                    'personnage' => $personnage,
                    'spectacles' => $spectacles,
                    'membres' => $membres,
                    'titreButton' => 'Modifier',
                    'typeAction' => 'doUpdate'
                ]);
    }


}