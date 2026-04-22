import { useReceptContext } from "../context/ReceptContext";

function SorRecept({ recept }) {
  const { setKivalasztottRecept, kivalasztottRecept } = useReceptContext();

  const aktiv = kivalasztottRecept?.id === recept.id;

  return (
    <tr
      onClick={() => setKivalasztottRecept(recept)}
      className={aktiv ? "aktiv-sor" : ""}
    >
      <td>{recept.nev}</td>
      <td>{recept.kategoria?.nev}</td>
    </tr>
  );
}

export default SorRecept;