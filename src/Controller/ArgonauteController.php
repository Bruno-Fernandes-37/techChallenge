<?php

namespace App\Controller;

use App\Model\ArgonauteManager;

class ArgonauteController extends AbstractController
{

    /**
     * displays one argonaute
     */
    public function selectOption($id): string
    {
        if (filter_has_var(INPUT_GET, "id")) {
            $id = trim($id);
            if ($id === "" || !is_numeric($id)) {
                header('Location: /');
                return "";
            }
            $argonautesManager = new ArgonauteManager();
            $argonaute = $argonautesManager->selectOneById($id);
            if (empty($argonaute)) {
                header('Location: /');
                return "";
            }
            return $this->twig->render('Argo/option.html.twig', [
                'argonaute' => $argonaute,
            ]);
        }
    }

    /**
     * control and update name of one argonaute
     */
    public function edit($id)
    {
        if (filter_has_var(INPUT_GET, "id")) {
            $id = trim($id);
            if ($id === "" || !is_numeric($id)) {
                header('Location: /');
                return "";
            }
            $argonautesManager = new ArgonauteManager();
            $argonaute = $argonautesManager->selectOneById($id);
            if (empty($argonaute)) {
                header('Location: /');
                return "";
            }
            if (filter_has_var(INPUT_POST, "name")) {
                $name = $_POST["name"];
                $name = trim($name);
                if ($name === "") {
                    $this->errors = "Merci de remplir le champ avec le nom de l'argonaute à ajouter à l'équipage";
                } else {
                    $argonautesManager->updateArgonaute($id, $name);
                    $argonaute = $argonautesManager->selectOneById($id);
                }
                return $this->twig->render('Argo/option.html.twig', [
                    'argonaute' => $argonaute,
                    'errors' => $this->errors,
                ]);
            }
        }
    }


    /**
     * delete one argonaute
     */
    public function delete($id): string
    {
        if (filter_has_var(INPUT_GET, "id")) {
            $id = trim($id);
            if ($id === "" || !is_numeric($id)) {
                header('Location: /');
                return "";
            }
            $argonautesManager = new ArgonauteManager();
            $argonaute = $argonautesManager->selectOneById($id);
            if (empty($argonaute)) {
                header('Location: /');
                return "";
            }
            $argonautesManager->deleteArgonaute($id);
            header('Location: /');
            return "";
        }
    }
}
