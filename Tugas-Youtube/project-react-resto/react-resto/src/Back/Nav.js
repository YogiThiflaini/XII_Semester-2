import React from 'react';
import { useHistory } from 'react-router-dom';
import {Link} from 'react-router-dom';

const Nav = () => {

    const history =  useHistory();

    function hapus() {
        sessionStorage.clear();
        history.push('/login');
    }

    return (
        <div className="mb-2 mt-2 ">
            <nav className="navbar bg-body-tertiary">
                <div className="container-fluid">
                    <Link to="/admin">
                        <a className="navbar-brand">Dashboard</a>
                    </Link>
                    <li className="nav-item list-unstyled">Email : {sessionStorage.getItem('email')}</li>
                    <li className="nav-item list-unstyled">Level : {sessionStorage.getItem('level')}</li>

                    <button onClick={hapus} className="btn btn-outline-danger" type="submit">
                        Logout
                    </button>
                </div>
            </nav>
        </div>
    );
}

export default Nav;
