<?php

namespace App\Controller;

use App\Model\ArgonauteManager;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */

    /**
     * displays and controls the form to add an argonaut and the list 
     */

    public function index(): string
    {
        if (filter_has_var(INPUT_POST, "name")) {
            $name = $_POST["name"];
            $name = trim($name);
            if ($name === "") {
                $argonautes = new ArgonauteManager();
                $argonautes = $argonautes->selectAll();
                $this->errors = "Merci de remplir le champ avec le nom de l'argonaute à ajouter à l'équipage";
                return $this->twig->render('Home/index.html.twig', [
                    'argonautes' => $argonautes,
                    'errors' => $this->errors,
                ]);
            }
            (new ArgonauteManager())->addArgonaute($name);
        }
        $argonautes = new ArgonauteManager();
        $argonautes = $argonautes->selectAll();
        return $this->twig->render('Home/index.html.twig', [
            'argonautes' => $argonautes,
            'errors' => $this->errors,
        ]);
    }
}
