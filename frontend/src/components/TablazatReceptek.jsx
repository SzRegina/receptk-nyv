import { useReceptContext } from "../context/ReceptContext";
import SorRecept from "./SorRecept";

function TablazatReceptek() {
  const { receptek } = useReceptContext();

  return (
    <div className="tabla-wrapper">
      <table>
        <thead>
          <tr>
            <th>Recept neve</th>
            <th>Kategória</th>
          </tr>
        </thead>
        <tbody>
          {receptek.map((recept) => (
            <SorRecept key={recept.id} recept={recept} />
          ))}
        </tbody>
      </table>
    </div>
  );
}

export default TablazatReceptek;