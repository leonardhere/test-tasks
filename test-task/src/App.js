import React from 'react';
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
import './App.css';
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";
//Импортируем всё необходимое для создания роутера-многостраничности

import Login from "./components/login.component";
import SignUp from "./components/signup.component";
//Импортируем и подключаем необходимые компоненты страниц логина и регистрации
function App() {
  return (
  <Router>
    <div className="App">
      <nav className="navbar navbar-expand-lg navbar-light fixed-top">
        <div className="container">
          <Link className="navbar-brand" to={"/sign-in"}>L. Kazarian Test task</Link>
          <div className="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul className="navbar-nav ml-auto">
              <li className="nav-item">
                <Link className="nav-link" to={"/sign-in"}>Войти</Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to={"/sign-up"}>Регистрация</Link>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div className="auth-wrapper">
        <div className="auth-inner">
          <Switch>
            <Route exact path='/' component={Login} />
            <Route path="/sign-in" component={Login} />
            <Route path="/sign-up" component={SignUp} />
          </Switch>
        </div>
      </div>
    </div>
  </Router>
  );
}

//Создаём простой хедер с навигацией, в котором указаны ссылки на страницы, так же, в блоке, где моделируется роутер, размечаем, какая страница у нас будет открываться по умолчанию

export default App;
