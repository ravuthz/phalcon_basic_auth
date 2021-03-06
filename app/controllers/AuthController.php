<?php

class AuthController extends \Phalcon\Mvc\Controller {
    // redirect when user logged in
    private $loggedInGo = "";

    // redirect when user logged out
    private $loggedOutGo = "auth/login";

    // redirect when user registered
    private $registeredGo = "auth/login";

    public function loginAction() {
        // render view "auth/login"
    }

    public function postLoginAction() {
        if ($this->request->isPost()) {
            $credential = [
                "username" => $this->request->getPost("username"),
                "password" => sha1($this->request->getPost("password"))
            ];

            $user = Users::findFirst([
                "(email = :username: OR username = :username:) AND password = :password: AND active = 1",
                "bind" => $credential
            ]);

            if ($user !== false) {
                $auth = [
                    "id"       => $user->id,
                    "username" => $user->username
                ];

                $this->session->set("auth", $auth);
                $this->session->set("message", "Welcome " . ucfirst($user->username));
                return $this->response->redirect($this->loggedInGo);
            }

            $this->session->set("message", "Invalid username or password");
        }

        return $this->response->redirect("auth/login");
    }

    public function registerAction() {
        // render view "auth/register"
    }

    public function postRegisterAction() {
        if ($this->request->isPost()) {
            $user = new Users();
            $user->email = $this->request->getPost("email", "email");
            $user->username = $this->request->getPost("username");
            $user->password = sha1($this->request->getPost("password"));
            $user->first_name = $this->request->getPost("first_name");
            $user->last_name = $this->request->getPost("last_name");
            $user->active = 1;

            if (!$user->save()) {
                $message = implode("<br/>", $user->getMessages());
                $this->session->set("message", $message);
                return $this->response->redirect("auth/register");
            }

            $this->session->set("message", "User was registered successfully");
            return $this->response->redirect($this->registeredGo);
        }
    }

    public function logoutAction() {
        $this->session->destroy();
        return $this->response->redirect($this->loggedOutGo);
    }
}
