import { useReceptContext } from "../context/ReceptContext";

function KategoriaSelect() {
  const { kategoriak, kivalasztottKategoria, setKivalasztottKategoria } =
    useReceptContext();

  return (
    <div className="filter-box">
      <label htmlFor="kategoria">Kategória:</label>
      <select
        id="kategoria"
        value={kivalasztottKategoria}
        onChange={(e) => setKivalasztottKategoria(e.target.value)}
      >
        <option value="">Összes kategória</option>
        {kategoriak.map((kat) => (
          <option key={kat.id} value={kat.id}>
            {kat.nev}
          </option>
        ))}
      </select>
    </div>
  );
}

export default KategoriaSelect;