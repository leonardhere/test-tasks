import React, { Component } from "react";

export default class Login extends Component {
    render() {
        return (
            <form>
                <h3>Логин</h3>

                <div className="form-group">
                    <label>Email</label>
                    <input type="email" className="form-control" placeholder="Введите email" />
                </div>

                <div className="form-group">
                    <label>Пароль</label>
                    <input type="password" className="form-control" placeholder="Введите пароль" />
                </div>

                <div className="form-group">
                    <div className="custom-control custom-checkbox">
                        <input type="checkbox" className="custom-control-input" id="customCheck1" />
                        <label className="custom-control-label" htmlFor="customCheck1">Запомнить меня</label>
                    </div>
                </div>

                <button type="submit" className="btn btn-primary btn-block">Войти</button>
            </form>
        );
    }
}
