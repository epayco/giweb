import Filters from '../components/local/filters'
import {FiltersClient} from '../helpers/filters'

//Layout
import Layout from '../layouts/main'

export default class extends React.Component {
  constructor(props) {
    super(props)
  }

  render() {
    return (
      <Layout
				title="Clientes"
				urlForm="/createclient"
				buttonText="Crear Cliente"
				button="true"
				visibleHelp="true"
				dates="true"
				search="true">
        <div className="animated fadeIn">
          <div className="row">
            <div className="col-12 col-lg-3">
              <Filters title="Categoria" categoryTitle="Estado" data={FiltersClient()}/>
            </div>
            <div className="col-12 col-lg-9">
               <div id="no-more-tables">

              <table className="table table-bordered">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Compañia</th>
                    <th>Creación</th>
                    <th>Planes</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td  data-title="Estado">
                      <span className="badge badge-success circle"></span>
                    </td>
                    <td data-title="Nombre">Pompeius René</td>
                    <td data-title="Email">pompeius@example.com</td>
                    <td data-title="Compañia">ePayco</td>
                    <td data-title="Creación">2012/02/01</td>
                    <td data-title="Planes">Netflix</td>
                  </tr>

                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </Layout>
    )
  }
}
