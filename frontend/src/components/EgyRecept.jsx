import { useReceptContext } from "../context/ReceptContext";

function EgyRecept() {
  const { kivalasztottRecept } = useReceptContext();

  if (!kivalasztottRecept) {
    return (
      <div className="recept-reszlet">
        <p>Kattints egy recept sorára a részletek megjelenítéséhez.</p>
      </div>
    );
  }

  return (
    <div className="recept-reszlet">
      <h2>{kivalasztottRecept.nev}</h2>
      <img
        src={kivalasztottRecept.kep_eleresi_ut}
        alt={kivalasztottRecept.nev}
      />
      <p><strong>Kategória:</strong> {kivalasztottRecept.kategoria?.nev}</p>
      <p>{kivalasztottRecept.leiras}</p>
    </div>
  );
}

export default EgyRecept;