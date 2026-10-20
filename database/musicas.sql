--
-- PostgreSQL database dump
--

\restrict 6rSMNNBSFHkHTTeJ6XLJtUtAbI6czfWMoMkVKpBVivXJyRtxOpyX4yHLydpmOrY

-- Dumped from database version 18.6 (Ubuntu 18.6-0ubuntu0.26.04.1)
-- Dumped by pg_dump version 18.6 (Ubuntu 18.6-0ubuntu0.26.04.1)

-- Started on 2026-10-20 16:41:06 UTC

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 220 (class 1259 OID 24753)
-- Name: musicas; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.musicas (
    id integer NOT NULL,
    titulo character varying(100) NOT NULL,
    artista character varying(100) NOT NULL,
    album character varying(100) NOT NULL,
    genero character varying(50) NOT NULL
);


ALTER TABLE public.musicas OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 24752)
-- Name: musicas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.musicas_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.musicas_id_seq OWNER TO postgres;

--
-- TOC entry 3494 (class 0 OID 0)
-- Dependencies: 219
-- Name: musicas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.musicas_id_seq OWNED BY public.musicas.id;


--
-- TOC entry 222 (class 1259 OID 24768)
-- Name: usuarios; Type: TABLE; Schema: public; Owner: musicas
--

CREATE TABLE public.usuarios (
    id integer NOT NULL,
    email character varying(100) NOT NULL,
    senha character varying(100) NOT NULL
);


ALTER TABLE public.usuarios OWNER TO musicas;

--
-- TOC entry 221 (class 1259 OID 24767)
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: musicas
--

CREATE SEQUENCE public.usuarios_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.usuarios_id_seq OWNER TO musicas;

--
-- TOC entry 3496 (class 0 OID 0)
-- Dependencies: 221
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: musicas
--

ALTER SEQUENCE public.usuarios_id_seq OWNED BY public.usuarios.id;


--
-- TOC entry 3329 (class 2604 OID 24756)
-- Name: musicas id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.musicas ALTER COLUMN id SET DEFAULT nextval('public.musicas_id_seq'::regclass);


--
-- TOC entry 3330 (class 2604 OID 24771)
-- Name: usuarios id; Type: DEFAULT; Schema: public; Owner: musicas
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN id SET DEFAULT nextval('public.usuarios_id_seq'::regclass);


--
-- TOC entry 3485 (class 0 OID 24753)
-- Dependencies: 220
-- Data for Name: musicas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.musicas (id, titulo, artista, album, genero) FROM stdin;
2	Evidências	Chitãozinho & Xororó	Cowboy do Asfalto	Sertanejo
\.


--
-- TOC entry 3487 (class 0 OID 24768)
-- Dependencies: 222
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: musicas
--

COPY public.usuarios (id, email, senha) FROM stdin;
1	teste@hmail.com	123456
3	bea@gmail.com	1234
4	teste2@gmail.com	1122
8	gabriel@gmail.com	123
9	bia@gmail.com	123
10	teste@gmail.com	1234
\.


--
-- TOC entry 3497 (class 0 OID 0)
-- Dependencies: 219
-- Name: musicas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.musicas_id_seq', 33, true);


--
-- TOC entry 3498 (class 0 OID 0)
-- Dependencies: 221
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: musicas
--

SELECT pg_catalog.setval('public.usuarios_id_seq', 10, true);


--
-- TOC entry 3332 (class 2606 OID 24763)
-- Name: musicas musicas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.musicas
    ADD CONSTRAINT musicas_pkey PRIMARY KEY (id);


--
-- TOC entry 3334 (class 2606 OID 24778)
-- Name: usuarios usuarios_email_key; Type: CONSTRAINT; Schema: public; Owner: musicas
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_email_key UNIQUE (email);


--
-- TOC entry 3336 (class 2606 OID 24776)
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: musicas
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- TOC entry 3493 (class 0 OID 0)
-- Dependencies: 220
-- Name: TABLE musicas; Type: ACL; Schema: public; Owner: postgres
--

GRANT ALL ON TABLE public.musicas TO musicas;


--
-- TOC entry 3495 (class 0 OID 0)
-- Dependencies: 219
-- Name: SEQUENCE musicas_id_seq; Type: ACL; Schema: public; Owner: postgres
--

GRANT SELECT,USAGE ON SEQUENCE public.musicas_id_seq TO musicas;


-- Completed on 2026-10-20 16:41:10 UTC

--
-- PostgreSQL database dump complete
--

\unrestrict 6rSMNNBSFHkHTTeJ6XLJtUtAbI6czfWMoMkVKpBVivXJyRtxOpyX4yHLydpmOrY

