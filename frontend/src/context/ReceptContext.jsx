import { createContext, useContext, useEffect, useState } from "react";

const ReceptContext = createContext();

export function ReceptProvider({ children }) {
  const [receptek, setReceptek] = useState([]);
  const [kategoriak, setKategoriak] = useState([]);
  const [kivalasztottRecept, setKivalasztottRecept] = useState(null);
  const [kivalasztottKategoria, setKivalasztottKategoria] = useState("");

  const API = "http://127.0.0.1:8000/api";

  async function fetchKategoriak() {
    const res = await fetch(`${API}/kategoriak`);
    const data = await res.json();
    setKategoriak(data);
  }

  async function fetchReceptek() {
    const res = await fetch(`${API}/receptek`);
    const data = await res.json();
    setReceptek(data);
  }

  async function szuresKategoriara(katId) {
    if (!katId) {
      fetchReceptek();
      return;
    }

    const res = await fetch(`${API}/receptek/kategoria/${katId}`);
    const data = await res.json();
    setReceptek(data);
  }

  useEffect(() => {
    fetchKategoriak();
    fetchReceptek();
  }, []);

  useEffect(() => {
    szuresKategoriara(kivalasztottKategoria);
  }, [kivalasztottKategoria]);

  return (
    <ReceptContext.Provider
      value={{
        receptek,
        kategoriak,
        kivalasztottRecept,
        setKivalasztottRecept,
        kivalasztottKategoria,
        setKivalasztottKategoria,
      }}
    >
      {children}
    </ReceptContext.Provider>
  );
}

export function useReceptContext() {
  return useContext(ReceptContext);
}