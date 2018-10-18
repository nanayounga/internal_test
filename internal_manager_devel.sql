-- phpMyAdmin SQL Dump
-- version 4.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 9 月 10 日 15:21
-- サーバのバージョン： 5.5.44
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `internal_manager_devel`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `auto_logins`
--

CREATE TABLE IF NOT EXISTS `auto_logins` (
  `auto_login_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `auto_logins`
--

INSERT INTO `auto_logins` (`auto_login_id`, `user_id`, `created_at`, `updated_at`) VALUES
('-O_OCSI8iwImLKcwuYMaxIUEE5RJyF7m6YYxUE2LlpR0zTM__H6pVIdeghCwH7018_yerIAXZr9K3PKvBnRN9GQNCFjDIXFYixdVDAjuyyjOE5LHvd2liFA5Mu4btli481HR2NfQQA7cNjmEUxugJCtSnq5r2klyX9jIQ9xBISybsDWva5FH', 2, '2018-07-13 12:51:27', '2018-07-13 12:51:27'),
('-qVJ1S_9jqdbYgHsKg_yKLzD14GowJOMt_MEv9nXFw5WozSjH10jS9Ngj5ZQdqxi_AV-ee1_VxcsJLcZWnPbWszH1HqhnUURFwDJI5d1EWgqnboyRzf-gdYB0fPBwNvU_a5f6T4AS5QeiauRV1fzJfB017JyOJeiZCdvpqXamqomE8f4cecH', 323, '2018-04-24 16:02:23', '2018-04-24 16:02:23'),
('122fqXev_JWPYN7w3byHHa83dSwkWjYs35CuMre2AEHlB_DfTMiaEJIBoHdzDUOaFDpOJuvgfL7sz1yRB_69R9t5b6V6IuwFKNwARbcA5GdI9vIjSVCdjsaPzNXdQVEdaxGlvBFxGZv3Qdu8mUVJgfvaGcI6qnzR8lJg3VJ_g_ZwOPZIq0bU', 1, '2018-07-19 19:34:31', '2018-07-19 19:34:31'),
('18Di-9JZIxK2MGfUNrzyCI_QJRyddNjQWEEHREF64Yyruzy2X5gDOrFrDyaoHaVcBqtKy4FraRkQTFdWK1JlGNlzkHigW7D1W2Czpu6RcsHFf_D0QHq1Mp0mketdMllvqTk2Gp2Yf0hBzZjYmfG6Q7DWnal-_axVVRQBhT4A7-QojawmjW_K', 323, '2018-05-16 14:51:59', '2018-05-16 14:51:59'),
('4ad0wJTKd33Rbwm-r1zL0974lXJKwISFaVaeZLizPn66GYiLNz5YrFHEVwQnSKQAKr1BvQm__G3KyrWK7uuTDjbXYag1qgAn9omO89Jx1V5bn0LvK5sPXa5r7lu1Z4oKTI0Oz0_bchanTpoaoPjHsvemyJNTSRyRtaswM-nP0OUe5EjMK6lJ', 322, '2018-05-16 15:40:43', '2018-05-16 15:40:43'),
('6GwUwF-6BhhR1GEeDAzj0F0aZeTYziR7HnkFN3VsLuqE7akOApU751Wihl-iWU_j8MATX33Z4kX76nRRGw2uzTfl3igwCfzEVeKWLAS0IjW84Vn_XfoEyC2wFr3rC5jzq6frCO2Hp4IN7nIU3utesabY2SRp_zj39RvZPEFKydybvnuCm1-l', 2, '2018-07-13 12:51:58', '2018-07-19 19:11:10'),
('6UeMaKdfGqK846BkTSgUwtRqC62_G84g_cGhQc8R3HvwWDRFGO8u-ESCS-YWK2eoUL9IPXdubbZ4rk9rfmg8ltLxnNjpnKS4rslyNuXfQEINThzaNpoR9wYCKO8_thvDdQ54R6EWHcssgmB3JlB8yJxMNW0-t8gN8XKSIH-6cIo5FMK8kdLh', 1, '2018-05-16 15:41:07', '2018-05-16 15:41:07'),
('6UPcsPT0jP7MmcBBDLgvC7Aj_0S8CUmF4f2ZykQc48kM-9k5YGFB3tjVFUV-HmjC8J5NOE5BLJqyPQHfm-UAW_ZTxPkQeabomK5ocLL3Jvm6GKBUCH7MGdGiHTiSRasCMoWkuRe9Oa0myRdREr5F3Ne-MWOE_rnIQI0_Ez4CjiY4kyUMsE63', 3, '2018-07-26 19:22:14', '2018-08-23 16:46:37'),
('6XvaQDLWrVcBAyOsxBtaPfTXZmx2AXmoa838IUjI17sfdSRq-Uhzg97ardUK1FQnf1chth3uSZbIUCx6RhPrJuCXwJrOmJVEQdKimb5_H5Y-YKQHWMB77Ml4GyIPnyLGsW5XC73FYBEr6APYLmewAoUZarvIvW2e2RHyv4R-QkT8Tkmo4C0u', 323, '2018-08-16 16:41:48', '2018-08-16 16:41:48'),
('7ISEBDywzBcBz8REn9-OBtizSyBRk4rkRrYab4k3I-UmisUXK9hrv29JeT-R6FYaRaFNkCvMgoofUfyi1St8m_2MrAQdNW1ol-Juw8pqpC4HoQxuy-JH3nWjbs75zgGoYaS79awFP6XxkpJmxtPVbLVNOSWpDv2KYwf0zzGS_xg70Ib7j4yo', 2, '2018-01-10 11:05:05', '2018-01-10 11:05:05'),
('8w7uZKvC8XgMPfg9QVbWUq5G9Gmoy2pOt7bsSRHCB2Q8IFfJPR1NjQGo2kA55w4FYMH8WrF0xnF1piMk3aDPThNASkoB9RESVDdTObOY09Sul0BR-SOE702R9K-SEOArgFN7kQa520wgLUJ4-VknSOSTd3QmGitD-b2Kwab_0aSFc6yC5I0e', 1, '2018-04-30 13:06:01', '2018-04-30 13:06:01'),
('9EED6tkp0N2J5PKZ3jR2qfEX_O5YNIlC6SceKuGyk-rr_Yj9kyEU7BkSt8N6HPhmy_QASfpOjLfVox_a8EZFKnR265sMgC-RQs_FIinLJjGsWQfdW9xZD4O2TQDh2ZWNDXAc_GBVAwDjw_snZlvIglRgmGevIgRKgf1VBd9GzxxhYJSXely-', 1, '2018-07-20 12:58:56', '2018-07-20 12:58:56'),
('9V_JD_36vHN27nYRxeo2vUvj--tsO24_jsL7yjxGdYAqz5Q3QHBbWLVXuyz0wxaChpFAsEVYySlkvzLyun6sGud0d_9k3iqsuxo_U6GEMv7gHGMF1CrJciL7SU2W5hDjwXOX8XL7tf_42XknXma67iNeeEiufD-6BNDDg1Doed0RnX6wKEfW', 3, '2018-07-26 19:24:55', '2018-09-07 10:23:00'),
('9X7OfKkEro_rtL8uBLnqjZD3tXa2xUH43PkzPPewZ714h6zXE3bNXYhnHqvC5RoxLymkBNf03-m0GpJtvTGFAD4z9FM3AgpFmQW7xvQ1r0kgl2i9sQ8pDdioGsnsYhCxLegiVQfWmW8owIk055CMmvW-AYvadeCyDAaRHcRNgtDqlBoH2Lx3', 1, '2018-05-17 10:35:04', '2018-05-17 10:35:04'),
('aCczxEiK2sZar2YEXdFWhbIirnQP8rDTicMLvyxKrjGkX45oJokJjAzGwuGnYb2Bknl7YkffGw0curOAt-Vw8Iht4sp9Ir6X6M_2Qowi7PIlgSsvDi47zTMUgIAdUBt8c10TVF7eNiQOqB9MYs4prRjgsjyHDYizo5vkjb484_h5vijzFjg3', 2, '2018-01-16 19:58:03', '2018-01-23 14:05:59'),
('aPlxMct15G4fRoVJlgDk6bAq74ZtVVHZP0dGUe7qHohDNxLqCCvdzdwhKoO1dW1lDV0qkq7D-aaB2I8B6SvV_5o9d_onlkhgBWKBMTAQBrbqvPtjx0a06hj5OsCH3GxwUefuauyLh3VMzW4fwC4fTqls9I1INIETgDGstU3-uiJE54tGxSHE', 2, '2018-07-12 15:19:28', '2018-07-13 09:25:35'),
('aXcAP-6hLlbaldRLXZJZTtl8T65dzZ4moYzEKCHmtT8HP6yA1xdm38WpoEbZ8pKSpt5lsnMB7HokaRd_XsJ_9PjItuT-w0Kq-WAPuQ61FnAbVoEEBdTKh0YLTqps3gG4Kvf7lXbD3D5eOuFiIXUntoKJ98_MlCTkI5-niS0jhtt2TYnfiVTU', 1, '2018-07-20 11:58:20', '2018-07-20 11:58:20'),
('B-3_I8VoPdKDOx8X82De6oJukB6bW37r_fSDgLoxY3eJVvjqtmdNodUewxK_qTsesrk4MeaveRHdJsNrwxLmhCHlDGrTdlcirwKEAWvK-D4oTxEQi60HWO77Nc9wn8Qs6BunOIKWk25ZXZs1-ZdUBhIEC-u2f87BtaXR70wvMXLmdhC7QTD1', 323, '2018-05-14 13:02:53', '2018-05-17 13:40:59'),
('b0r5UegagJQwwZQaSuLCi4So15IzDttTBJUpQrHD3dSfeDuF6QYP2MuH2w5qEPdi6e4bYEBUe6t-m6XZnou3iFzBq5vTMJrKiM1BilBniObvWTX75X1zz9OasJ7kOYF9c2PDWewxEQGU5vIeNqzzwEYN61IAejHM_SIaYqIj7JUnpgh8JhdD', 1, '2018-07-20 09:56:08', '2018-07-20 09:56:08'),
('bHD-ItlMi-2q2DxccNwntwNiKB5UOz54xyqt_-mHZ6O85FWZHtBdIm4i0zKvpU0bCJQKpkc7NImDVf6x__6-GaEiNGjQxyCMrrTsQT8zA1tEBtxISiPZ2aWqCdrGlaQ-pAaV8xS4oNvYTthm4BxdnIb5R59VfgC2CBK-W2dmhTQRS1CvKzBI', 323, '2018-05-03 15:50:54', '2018-05-10 10:13:42'),
('BrGfl72uyOCCO94HQYtTW3V1QF3WFHNTNriwJmJN6iRYW_wvxymwIOChpLM_gJ_zBpB3gtnqIpNixcW5z-ADIspAsens5ZZvfJXN0TTFzj95ySzZZ-n1S2aYDio9wSI2pbextR2CmBJ5eDz002IJtkOnZGgerfGppfMKOVo14vrKCmS4fcc2', 1, '2018-05-16 14:50:10', '2018-05-16 14:50:10'),
('Bzq2VE9doaeQ4wehHqPFvJCkkq-301qCCnHrxMbUmSjcY3WOoto4dhTe-WvIu2bnMAxKAwEa98ip-vvFftKPSO87I9thJfNeSXkV-OTkreY_L3gSz8uoB2zUeEkNvWhIQRQSagg31h2KWS2jeHHPR2ARVmoEi1WdnY37yIG-Wq-kbuZY74my', 1, '2018-07-20 10:17:32', '2018-07-20 10:17:32'),
('CVuM51mJvepyHLh8dmaZOR76GhSPjuTssadko6I-k_Zlik1W1FpfBkvnxBNrIihr5givXOLk3oJelUq1GpV1P6Lqlo0QJMiwGMwBo2v9zUHgm66XqRhpO7OKXTsv7Pjjul5XKkKb6pjCck6Ex1KfLn4N-lWoZXRYN-kLfLpZ9ktut7eqn7Pf', 323, '2018-05-08 11:29:02', '2018-05-16 13:31:03'),
('ddA80_xhIqBDzENQEM6pohbBYXNriLAp58HFQg6ZLcqTdOM4DIKy9QoEM4NMPAhOUxJRGrWBHf1TzKWPe0GbPthdm6KuRdjtWd73HDSYZwmRw5DJBBPsHkj9r-sbvn9iEN3MRBRRsoIVWlp9Sh5mlxDqSSKJ1qbcNhAsUY_zYpqdFqgo55vB', 1, '2018-04-12 11:59:13', '2018-04-12 11:59:13'),
('dutBKUuwZh0wW6r_l1xGbJp4YgWjHYKMRKCS0Tv4BMhzLPDrokDdlG73fidHtNLwRehsuFAR3iwY-_JnopV-WZm39bF3kPzQWPcByabYE2OMtthLZOesErGAdO5NAutfo89Io3C4ouP5T4np5uiTQRk9B-dF1Jhc2TsOexX7Ey89ofPHVqiq', 1, '2018-05-16 13:41:14', '2018-05-16 13:41:14'),
('DuxLstKZw9tTwi0K1xdIIpbyoEBCWijfbTMm7kC0uMzlYeNWrA9GL9iKYWoOlIRaMiao1vmUET74ToRaYmcGNwusTSBMHgJfhWryigeFUP1pBO9i_Q8FG1M56phIW1_Yc4Uu7jPjZa7aZNzlfhcE-GxZwfcnpQL49N9drEtPImGrFIDuM-_d', 1, '2018-07-25 16:22:31', '2018-07-26 19:17:05'),
('EoAjDcw_bKyJTf6xnYn2p3oPNycUzUcPLgL6yCRekQaJogkM7_cadYY1DtEEMWo2EKSyHInlE7DnDtls6GoTluxI8_FR8Hy0I4NKlP5k4ntXa-QXB250pfG6Z4Hy8uncY-1ovH1J4aXa1EWVv-q1YiLZrjZ8Ql84_V5-Fehqr9LVhXtsAbnq', 1, '2018-05-16 13:06:57', '2018-05-16 13:06:57'),
('EweAM1FqOeoFMx4bMbRzNegyt00pSqerQL1j3x_Tk4XVV2sJ8NH4kLhJrfqF-o7NlakAhGgnIE7ah5ncojGXFZLzA78CySIv96ypY4nBxMEw1Z5eJY98gKiNUziiCfLsZnXf8rFV-_0HqwtLya1YHmKilEz1lzzcqPFv-1RpMIc7skd49glw', 1, '2018-07-20 11:58:49', '2018-07-20 11:58:49'),
('f_gbhxFUyk1o3QbJ8VLGLe-og-SmQyhgszoB1KvdFm38aV9N6muXGUkuelGkMw8UCOWyoKgk9DDDFI1szEzFkBBL6odvToFopH8TEq3TZv9PMaxhOffZu4qF-8SbH2JgZqBebhge1j9hLoTkzPk1H7EL4BkaE6zTa1wEE1ibGtK3xib7qO-t', 1, '2018-07-19 21:46:15', '2018-07-19 21:46:15'),
('f3KiCDIlbTvKqHknvPw1B2txI1kw9kn1G_keYvNrMWS0HY3ZTZ4--IVJNFRy0cLC3af1InVn2TpUfLttKhoFrM1vqjCLlNgsmQbcuqLwcrflZIYntl75Vt-lmAdWVo1lwkJj4n76WPvxLkG-7_SME0CjEkSkiPBtz5TkFGFZbfK5TX02iBXR', 1, '2018-07-20 11:39:21', '2018-07-20 11:39:21'),
('g0ohyIuzu2E8ZVu5JoXg9UCcc-1WpFcVtcyKSRCNrUxQFO2i7tHIDtnvmbTIEluS3q8i0kYPYSF0WtWC7oF1Z37WHog-lsSYwseA5GrPv6yBoWEsI3CpF8DzEgluzD3C47ZGnaJgobHHRRYutgsIwS38gXdQ9fdjZs61r7Ovka5vXSuJHV5t', 325, '2018-05-04 13:18:52', '2018-05-09 17:06:34'),
('GDpGJEOL8yeUV48ErE2yT0uM9Pyo4DKdeNY6cmDQZPYbgnqwFk1vdssQxmV8YcKJpEUZJFS5ChCBQti9BdsR_9uoPx_UGd2JY_eZV256vDd7rQPepafummDUF5UB7izH5-umNlevpLkBE5FWzrOIhEK3Vd4zmR-Q6ucffdqmUoyQW9-57vZB', 1, '2018-05-16 14:52:33', '2018-08-16 16:41:26'),
('ghd6_rA3XhVSSvXqwjye7Bo93W9TvqQgh0pTjr9ldMsySoM4xDSl32-WdVNzVfQ78ELDi-aAwi-33jukwuA708n55iQnxdhO9CNS2eASgR-e8hyGsN_I83axiBzEWeOYET7QekcPILZs2uo9dQ1AQPYbti7opiSwIhV0RdSLe75DMGOHnZGi', 315, '2017-12-18 18:54:26', '2017-12-18 18:54:26'),
('GmlyUW5dZf5o5qd_InnqIc7Cy9iboKY0YnfTWUXNxrAyMvEqk4NLd-tAqtroK2RSVRZDmaDIgPuDqFwlnF64eCOLfCjbL1uvvBGn7ADI40kWJqcTzt098onDSC9vLeaEQVjYOYUbMoxtm3O2xeqYQBvkpvVurRNh9PEpMCGDdtJHkeoMwW1d', 3, '2018-05-16 15:11:09', '2018-05-16 15:11:09'),
('GoDyaflOi6q7aHM6_mjLU8cUwui32FpaFVdslGybxgNGpxl0FukUCg9cI-PEzFk_TMMzEX2OkXpjWaU3PVWjEBEagGC1rt7vSCAK1VshPg6-PS7z6Lcj9ynqtbo9wyQOhO5wsejDyRWhic5hQJs_vYcIeSAUgzij3GFyK5kWPP_zMWXUCWTz', 310, '2018-04-12 12:01:35', '2018-04-12 12:01:35'),
('h2HgYr9TbrOAqRIZ7l7vo5YRrG97QoZbhPSF8c8lHVhPk_hVfMfDDCGV_n4R2XaMf0j4YQ9mVKo8zzW1ve8RzvamLmSm9zNqAVuJl3lTu9n2baWEDQNoSnrx9bSPunl1XU7IRzCZG07cb0MR4bocLBGRBLN_M-H9HAnd4e8z_0h8lwcRzfhI', 1, '2018-05-16 15:52:17', '2018-05-16 15:52:17'),
('Hj_FJnXTlTJVld0-TgYmu_hdsjn_Ybelp3cjOwSWDdEJUJq_EKPPc_d1bps7pnhCa3QfDRltZNENI7d2vMhUmQKnoynxpidNABCDbTKRjRRrJWR4c3bK4RUYtGqSmwFidGw5fxmhfc8-vtbAp0KBnolbNm30Fu2ibCc01CEAv4SeU_ki7hf4', 2, '2018-07-14 21:25:07', '2018-09-09 08:33:11'),
('IjA2Fi0rPVTQK8nAoD3VAT-CMYbxq9lyQdDzgV-plPglwUIGXsLOfvDZrvOtFPzJby1Hni1ClwAJmsEVwMqpuBBOcLnWCjEbGhu_yjLYesK0wuoqY2tbn8zcZwOZ5bUzolMjvShLCMJdAB6tNYI-eBBWzapgK4RvzttZDwhntaZjLY_7fGaM', 1, '2018-07-20 11:36:39', '2018-07-20 11:36:39'),
('IRSXJu4uzhZSRBI1jfrz_9sYKb0QGQFMl0r3Qoe4JfnaIbst8bDTy0fV7sCQT4cs3BWELIzZVmoQTIird1QaDXCQPz7ihwFNxweM6HIH0jwgAoEg-nQ1o7eW7lhioT2uWCNsOjqpPvpiuU0xdta7F3Z5HCkESE5ujj-vn8qNAufCzTqjTUfv', 323, '2018-08-20 11:02:03', '2018-08-22 13:39:45'),
('ITVq3K5gxzDz8jju6a8T2GzVGa2IC5sCBgs2QidN3cl1YkgCJ6SVI9Edhw792j6DIJpd5RhAJ_kc7ItkVfMKuW_-2apHNmiaR_TRwOkaSmjlk7ar1ASk0YiwIj2Ddb4IJ0JqVm2uM-fmnxQxoqNN9_WtU9hBNw1BkZge2BeCRWK0I2Fovcv7', 1, '2018-05-16 13:13:00', '2018-05-16 13:13:00'),
('k5KOzY5zHgb5uOvrlBNIC1WRU3Eq6AHrPMsO9FG6fu85wy0vgk4w6kcVcfYVJDPpmNvGDQjm5z1FIDK3oLPMIY-PbBEeYG9H1dr9J8i2xYE4SIDVdJC6YxOeBLnI8JQkkp0JQJpPvDLo4uH8xB_t3-xtmAAEm2BxAqhave2eWxTRbZtse92z', 1, '2018-05-16 13:42:57', '2018-05-16 13:42:57'),
('kjUkWtGCqzw0MHgJeB7nPr3gkqPPgIzwgVgVwD4cm2KTi_Y6yb2wW4Z-G2mWgsbFL4mDH92rXnrqYZk6NEt9e_YqR6apo6mB6jcOhADqGsNAlWXGIKu9ma-1F4h3ZhDYdcxInVgiCjTN3purWe8A9m_kqcD8-yPhgdCxUHaEu3heyYqmEz_3', 3, '2018-05-16 13:12:00', '2018-05-16 13:12:00'),
('KQy3hE-lBllkS_BCY5b3Arsdh8od-PCC_VKf2UtJi2vHxVwxnOLo9RA5KBbuuPCzXupKaTJx-4r8tXz_WZ_u0Fq4YTEvGYiduWfhPAsFgIMOaSugc-KMGfrpwoFmws3eEZ0qlZuUdsBDDipweb3v7TaQHqKjaF3sTsl-fhKWywcDYiVAYmF9', 325, '2018-05-14 13:07:02', '2018-05-14 13:07:02'),
('l_BV29YMrhayKeRGRCkAXZHnVRPCH_z3kw387Uu6Nrrg2gn2iPM7fzXccP_AQCD2tlHO3E9zt9rDmxRwaplgQvmhn8h2ieySjLyO6_8jSfusxSxEf4Has4XGrVboije-213cnbLZCdV2M1o0c3kaub7xMxjyg2u1uAtzVdiTA1g-cVHtgOFm', 1, '2018-05-16 15:12:34', '2018-05-16 15:12:34'),
('lgVUWlBCaRybY27-D5QGvnDOI1MG2TrnKo4vsK04i5tIDbY-veq9dBmUZEkwA1OUfN_LbF9dbAj-BSX4YxiEOv66onxkD-3ibGA3GIK82wg3yJJrsSqUHaio19vlcp1KAGSbNYezy4aMX3p9smRgTN0X0Y5PhbALRU1I3AWL3E0o0g1jgswR', 324, '2018-08-17 10:59:06', '2018-08-20 11:01:14'),
('LMO0Sq6O2yNUI4oaAObleFOJ7PnUenf_RmoiGSb7dLPL85nx-RYzb6QHJy37PxoHLNk3Z3NqMCE7jrrmsCw4LAlTsbKurDzOam4uiBUq05vlEL6_yR9GsNbi_drl_rBg-r8y2B59khv5qRvRkLQko4C5mQFoOV-boj5m-xN6daHYqqEAC8bv', 323, '2018-05-03 12:32:31', '2018-05-03 12:32:31'),
('LqsMzmZUxgoQsSC-ey9r8LKy9lDn7LCoWBOURtODZbV2wyP_4_CR39oAXOQC_xGmZcgF1kQD6SrR8hKyJzpumGaO6ki1gu2X0i_5PgkXtN5iyEeu8yMsGcy67y610d6d9gYbfbR2hTQKKdXH5vPz66pV7M5TZsrHB35foCLgraVBOO-IwG5t', 1, '2018-07-19 19:38:19', '2018-07-19 19:38:19'),
('M3TCrK1Xu2eM4mvq70aEtus4gbDljOMvtwO8mo0AT2rQKL-YicA5Z2si8xWBdwceGtrfA0l9FmQOVCVnVstUh98HpiITnA4UbPt8kXWUj2yE7uDd3dRIltR2hADkT5pHoe-HSeQfIK-Wzvn43pmrIw5lmahNRXTdWQSD9uzaWyc0AWdA2QJe', 323, '2018-08-16 17:12:34', '2018-08-17 10:25:16'),
('mI5yyA3PMrRoKA-nXOSILYA_hQY4D7-kBF6E8nQXGuUuQ9Jsyc1zZg6R4bY-upSVFJbjXbYa7Jj36J6c3v3ypGkbWNd00mWpWl6IpNkwgiXu_Qws-IaOLpbQA6x_B3OZNLA8dqyL6QpjCiHTpPj_pCOU_-YXUhngvcqHRcPXx0W_XF4XZgAp', 322, '2018-05-16 15:51:51', '2018-05-16 15:51:51'),
('MrLYP3W0i_5hAYblk-V6xpE8uwrNjBOZb3KvbrNscVBQbowJwQm81zveITNpR7NdscIGM8TkX8Ao6I7gsMy2pa3lRfzId68V28QjPbt6UGLhfxtKA8BAJsl33041li9gizgtQyvSJAw2fhq5QJZ9LDEeW8qbnq9LazVCpvDlCPvyCC6h75ep', 2, '2018-07-05 18:24:33', '2018-07-12 11:04:46'),
('MT7-CcHJF4RYofkg8kk63BZW83rzg8jZ2bw5KMwmD_JMS2bHzrGqvWzuUKBTg-lq2lyCqMJ4jBt9S9_74cETJp49WykpLPCej9Bd9TMq6TbqT_Lg7Z8q1PJ_Fb-OlI5KQLC4JSOJvXctLM_6yeuM5M97845hbISHhcQhdYx1Q8vxk_flIbwA', 323, '2018-04-24 13:40:00', '2018-05-08 10:36:04'),
('nC5qdnGBtIr-GEGoPBtpsUswO2UMQbwMnnZtMXdsiWiErbKnqJuCffw_whj7HTrNlYgMr7uBG6XYJSV0ccdrzG4Qk1qBrxO70BILxQ_B6Z0kzMh3uwinoxcBY4eNglxfjYR3qeIzl43MNHsF5aRqhDJZSJoqsSrVF75l5_2JaJiNtugUY4nJ', 1, '2018-07-20 11:38:39', '2018-07-20 11:38:39'),
('nkI41mVbAGReM-wCqohRjJP0ndvTWjWVhY4CshgIzmucaSklsaNk24KU9QFp4ETorfNHEw1eC2ERowqKt43tWYl7VqzmX7nM-ROVJafYgfpHoQA8XIPAP3HbaTbaQPNpAgNnHEFiDhnAfrHfDH7ZAnZLMXzBCELCkRPTazYoq4AHmJ3imb4F', 3, '2018-07-19 20:54:13', '2018-07-20 09:26:01'),
('No25Rcfa5HBATMk3G0lv2ORHxbzXFXOWmlz20mNXdtFWCWEur_5jc2RNZHtfN2I-_ALF_33_t73T6j3n0aMfF_rp5wk-4QbZJI86-9AjOh6nzhhi_2mTVk6pNcZ4G5G1ZYBcVZhcJMzT4VyK4dJxYGZJf1p_0UiY2SteSuolginwrR0uyId_', 315, '2018-02-26 11:15:06', '2018-02-26 11:15:06'),
('nrzSELZxvr8wUa0LLoz-r1bVmUDXgkSjzPA16YjUXCUc0rH2R9s9oPDWT3uIecV1sXkaNsoTKu7GqS_C6mEXSsaBwVZUWlJMqoIbX_3EpZUeH_qpimAKwOdpyS06UZCsZp7lkNwpAEzxq8q1CE530hYyuJt34EGkBvLnpcxtArPPJaBjCjaf', 2, '2017-12-18 12:06:09', '2017-12-18 18:20:45'),
('NxciBNvqKHtmg5VFNdUA4CGhYx3O53G6qE73NXrtzKgiJs8yTAdMoP2S8Vx7NuvkkXLgPx19IOp2vsmMVG3Hkb9pcanCfMAg5WYEkl89nC4kqvup1E6qmijS8_XRkAvAC2pllMutItqJ9IHV0SEtMX0cwNbl5y-8LmISa-0KIhmFJ5INQQM7', 324, '2018-08-17 10:58:26', '2018-08-17 10:58:26'),
('oA4vmWo52k9GN3VJS8gWpkSZQVemgl9m1JJ-eTbPFq_z3p_sa1czCP7hSROefT0rtSWDzleyt9nf7D96BO2L0VMwezZLtKcUMmEFwJAtDM3Tjw9U6--IeyER_jc-62dYvUSxtuJ7mMGtuMFVK0SEgxZ0uP_tYaOvdBv86YraaXOMqpKwykzl', 1, '2018-05-16 13:40:12', '2018-05-16 13:40:12'),
('OOgLtbJl5jXocM4pud-04Kv2Zuc-bWhhUgLA954XrG6EG5TOcMe-uOXTnRjlPrX6gry97S8WquIAtaFNvWCzVRbmplMay3NQqj9pjfy5cnyHo9CihelnPrPyMU2d96Q9yMgkr84c5E55gzruPPbinz8radPCbY7sEWMDwvb9VjjhPMI7tScj', 1, '2018-07-20 09:44:00', '2018-07-20 09:44:00'),
('orrGfArzx0ooxq-WJgWHIQ3OBx4RdjHWN4Ovsjt3-x8b1r9PdDcrwhNw5DyNIOPy7PDMv0w5qte0cmop1ZVlEE28HbluFT0sMdcISLB-9MfrYpHtSjFwiyumI-R1tusUhfdydcCuCobUbzHzhRJDlMqSH9X_g92PmHe9BFUG8GXk-gEEpW6i', 1, '2018-08-16 16:45:26', '2018-08-16 16:45:26'),
('OtfO75fZeyWgxhESJ9YZjEKWVRFBw6NaCAmNH_tii6IRH1G7oxw5TayI6HNbKHGWq5IC-VXhaUpj9Fw_uDWuCVhYezGPu4U5uTHC6_wcXY15pFTiT3CR1tWVP9iTf0_X2r0KABTNvJ_JzGIeRmQ99mbzBzuRQ12IELos7zoiSacUovXaNTy0', 1, '2018-05-17 16:24:14', '2018-05-17 16:24:14'),
('oTZnbnVohBWO3dlxZSElseA3Cb1J7cnhql8y9iS0Y2jmo6YLghFalWpYfBtkXWeEAQlaKvws1g5kTl-UtzksB5QRBB6DV1Kpf84uKNuwgctxufDHtALOhvxb3PlfmweewRZwLHcbNcf5hMx8bpzO4uA51plHKLiJ-rc3NUKOzYIIKHDk2Bi0', 1, '2018-08-09 18:50:03', '2018-08-30 17:17:27'),
('ovFee9YVb3sK6wi5J7F0ALOnHDCMu5pRLtXOADn3n0fNyeev3KuS_L6eiYJABdkxxUdD_XPp01YQpbec-CeGomlJH22fLeMUGAOFSQlS9FsqlVd5tod9K3t2wh_KS4j-kPEMvcsS4LDhGQMOtSfNjOw9ce5GswdKrioYjyVAz7CI13lFLIqg', 1, '2018-05-17 11:14:23', '2018-05-17 11:14:23'),
('oZQICMxcmmLIXP3cpufMQqqi3-DP10OilJLFy-ZlWtTbNcc5pv8ITJ9ofULo5nuyY8BwgmmLSQX7q-HUR7kZa6dHg8BE-j6WQ984Q6fY-fBviwPTXL4wCQuofblJq4viWouzeAPgpbl0r5eRWagv7SLV_3v3DznruwoClP8Xynf6NZ9ixbF2', 1, '2018-07-20 11:38:10', '2018-07-20 11:38:10'),
('p0fk0B54FAD7_ch5o8vG18avr9hr67LhTJ2EpJVUyhQYCQbJkjhZKyCQsY0MLv8zFxzGjWF4SdOVxjnVB-T1y3xnhRRIw1rWu2ODmDMlY8bziA4-ZGcNIyWFGThA1eSSVcMJIG8xWF3LCHnd0Q_N43FNSq9VzDRi3R37NiyQeM77iHk1J2I2', 323, '2018-05-16 14:49:16', '2018-05-16 14:49:16'),
('P9pPKcYFcbQ29s2s4mDr169KVwkGF1n7ZqZ6FtmEZgIu4kWTbm-kIy7QFr-mKqUlhFMwQdTbKZc1i0wFQiynDZYPsn4F0E6hlkWZy1dUDYOkERIVbtUK7bss__UCOhR8fZx9BBKfMh_I_1L59cG6F4wiqPIsZVt6LoCJ7pvmfvrrwANVZ_nP', 330, '2018-07-20 13:55:16', '2018-07-20 13:55:16'),
('pgcX6x4dGLgvAbMK6fbBu58xFCiS_tuCsstaUL95_BQnJiYlFUJSLtZRdyS07Tj7f9F4h_40EL8_G_ffaIwkmEiGr1k0Ou5yFPZNn7cqQtYoWbkpgntJEBJvrunM6xEHJ1aYSzfeny9S26ULukkR9dbZKLmEXb82jjwmF1NRe98i7u2t2XXO', 1, '2018-07-26 19:18:02', '2018-07-26 19:18:02'),
('pMh8wL5LS1X_gNIZ2vzIXmGKY6T-xhwqgKQOEM5L_caDcUJUebVlztLODZkvBUi_IYzJHFzYR_ohdQ9IkfR4zcaURJ4KnffiUp0RIVYBKV1ujW8V68rXTFIPsAf8NRpPjou2XRqR6wSUxTfl2sSH4XFeprEdVzvkbcvyMgGgc8bR2QD8sU-R', 2, '2018-07-19 19:58:54', '2018-09-07 10:23:26'),
('PmvyFbHcihD7rNT0sRWK3LZd6ClOjztYZ2GF7Va_okSH2qHPyAOtXV8Mnc1xW40GxSos7D-dV2Y78Os7qLi7nsjby8QX2vl3VrIGZUtRe6rDc1CDPeeXK-nS7M1u2tvDMO_0vfn7yOKoGcCUeuCzT9Iv-1Mb2TQ8SOquPgJyLPRLYbdj-SLT', 1, '2018-08-30 17:17:40', '2018-08-30 17:17:40'),
('ps_qoTqoxsR_9xJ4ntA8X9oNoPb-5epyLs_mEMNTbGhrVIjJPfedM2AO_-TEz4QmrLJw7C3elrsYga5NCrFADEbGxFNViZbzUkmPNSR6C5bkimTaaB2db6SHPDslev9NRLa7AZ0Jh1vifauGtZoZ9iQZXte7WRXGV95EmNRGzsjhWqCUKzZs', 2, '2018-05-16 13:06:32', '2018-05-16 13:06:32'),
('PVmMkIzojZa4ktNwofv61UTQUZnQDSRLXXQQx-Oyw9kPyWA9lVAggDKMPthMqy0aCuFPRh3BN3Ozt0WL1buubXgF7xZbCRSGV47Di6FZStdHowkVZ7PH_OqavyPPN_Pg9jQDj81JfQjk7V_E7NTDFtTpb1K6vm-1-pX6oCv29laxRaFntWdx', 2, '2018-02-26 11:54:58', '2018-04-12 11:57:55'),
('pvmo30zoFOplxO_q79FovGYnAR0aezoeZ84pndRpxnH17rtyo3TasMls7SlyKBkRyKE3JricrTXtILVZ429yQq0W33DsdZr0ldWa6zuNLaeswfpQubE-As5IqwMTNFNSQWblMFgeCxYU2sL-xiUCQEvBOBYska3xDji81XneXwmTi_yX7RJH', 323, '2018-08-16 16:43:34', '2018-08-16 16:43:34'),
('QsOcQIRy56ilXb4E3j5V-3cCpZ9TdQn3dSo62nH929cfyy5iUdZPULtgCm0fJSlCLuho-0gYkKEYOptwcGCfDUrUL8Jr05Ib0lIGLM_qS_eHahM4cMUC1AqBGhWFn6f3hPmugTMn7ezOuqHn2gXC5407mferYHefXdrZPmfsoxyFeXgtUQx3', 2, '2018-08-10 14:01:33', '2018-08-10 14:01:33'),
('reQKE_M3icIaCMER6OaPJLPlLOex_IVO_BGxSYA1qk1fWNIP_VBfKMs2d8PGAlxG1xrmaq1tKPnbqCja0slWnwiTadkWMCk_-GGUoBYyZXef8kyDRB9JrtiRtirvcvfI4LBBaWd_Q057FiNTf_3haQ2BK02j4RUJfIXQQpDYLlRBsR3fSKYm', 4, '2018-04-12 12:02:34', '2018-04-23 11:31:46'),
('RN0wL6ZIPyTvBiAcXzoXkOMSXjF5Tfcf7Kd3rHpYjzOkeHsCLdzRj8PKiFCLm5mJ24gbTZY8h8-3cnIVS1UrbumS-JxtJA-ADg-OAzLFOVHhX9ufCXnAHVDKe8V_GIbc2JprjBog-7Ji4OhVl3m1WfOnUXmlVTa7yxLYM0E6BsKUzp8Uuqa9', 1, '2018-07-20 12:56:52', '2018-07-20 12:56:52'),
('U_vxLfJNMDglpMcoCQZ8Wu9WOdeWnT9EB6RvBzwcrMjyCwSTOmfeOcpXDb3HBBdF5xh1Jq35ObzfkdzXOFaKft-mdooQLCQTPodBL2p39EXFxHIvnWOToebkl2ev7hsotJRlJ46g7pc5YNsSdQRMmMDAeZ7cH6EEKEPZtTaxbzD7zGBN-Txm', 2, '2018-07-09 21:06:36', '2018-07-09 21:06:36'),
('uaT6vQrr0lI0paB8ceUUnRuqNIiQIQL95cYS-zS4M2cM9Kk4yItL1piAT0AGlxrcsRobzbYPnlQCpeS6F3zZY0WwnEQZAOgkUZFf7aulsil8UOWzgMXxwGScIQwncqnmlVv84D7aXmr1aaxqkT9SrmbUTOYxI6qJbrjF3bgfPOKWn0FcN2Bv', 1, '2018-04-24 12:10:52', '2018-04-24 12:10:52'),
('uGWiOnJOPbvmJutgadjmRuZ9YGS2fDP8RU61Bu5kubJ0exPQs_EZDPUoBUvwWFqkTWCj_VRn5IV6dN1L1F9Dy3MtyUSqDFWT5zrztAPeIoTOyrCQoOPFOD1jKJhaIc4Qwu3VuOOGKt1rcPbQCfxuOx1TycWqH6eR_uGfJXsUsQn9mEfAF5Md', 322, '2018-05-17 11:12:39', '2018-05-17 11:12:39'),
('uiZj0B965o627Nz9o2vk8n_6iyAw7FLMe4EobdxfANdrLUW1bCrJvOrZu4elG6EPckMmwOkmkW7r1OD4-ezqhPQlXF-EfHlRouh0hpC7pru0IQl8teeHquz81maJ6yT3rhjfE9Z5Y9IeUZdfT2oy3Ys7ZDPyb7KTlTK7UqwOFmlDhOr6sq5V', 2, '2018-01-24 11:33:55', '2018-02-26 10:57:12'),
('VFmYbyFHX7ZJBrP_L5Xfy0Vi_tedZBUzs-6egIGUExJz3a1r0rlrUNgInwnLm3EG60YImwggAdcltgLEEF3Ud_o1yBptdjEdGtefb0gwjG1TozvmGPO0TyQysYT88OH6524CqRhbYdIfN_3PTPQSUSbyo0-SQ3mG5KYlF0kYyAtjehldte1G', 1, '2018-07-20 09:45:01', '2018-07-20 09:45:01'),
('W3rWGzpft3qWERHyM-l39_9lQoHWEiC6r-JYhibRpypBUvCLI3rDv1qqa-EzoedO565YO3RY44VRD41sn01__RMaBVCpah_p4sNlrV62-O-k9RFE2hieSvzS9ID8E7-MUUXVx0loigsr81nIQ8ztIwT_qJn48pMAupXk4JMwNRHtkPwWTkqC', 4, '2018-01-10 11:05:31', '2018-01-10 13:34:08'),
('wzkF-R8yLjwekEfiASA77umAITpEOirGvjUOt8W44Zcfqg25Cp2oZlZKydeaWbTUf7D-PknClrBJGa7XKR7WW2l2U3uikr6MDp0uHelk-GCSwfwk_Dh6EXSqjVyxma4ifAgMJFAyEV0S33I5EmRAuMi9QbPpVBJcSuqBs29ujmOlkinct6_T', 3, '2018-07-19 20:52:19', '2018-07-19 20:52:19'),
('xy4yJlFwlKgXg0KIR-6ztYp6MHv10CadZRIoaR1EkYzSRbW7PosZpwP6QmeJSlSK8GzZx_6sT0cTznKqj4pSIRJC76lMoK1GEWllvXEi3oA2OABar-kp3UBu8f43upRw_yu_jXE68MdMBpZPETdSMoXEa6cQAEsyL6X-E8TDN0YbQIZraiPH', 2, '2018-04-23 11:32:24', '2018-09-07 15:50:04'),
('y5xCGNbGKLgAcfVGPWf26FGyDDUKb36VePFuOJLF3vHHocf4_UfyxlY_rKxhEImxa45lkxu8rOgA6cz-N2ffQr_NRgz1XJhy1SngTJMgtRWygieYPXljfRKReQ_EU-phbp-CaY7QvS_eFYXo_ySEknRI0mM2LPfL_mC5nKgCJSki_U8_4J0T', 323, '2018-04-24 13:32:38', '2018-04-24 13:32:38'),
('z4SDHALRX4prh2HS9IJNjrL8tblESyCKH5eoAPq7xFSu2dy_ueOve6a-df-MMPUAI21ZIB7MboCncC8Styt5n6Nj4xKNiZW5kE3CTsDD0GveYydtf7J5vWKqr1tVZAtpFtsCSAGuTwxbO6dm2lKrW_YkVehZYZN9Svy3e901eCMIko_Nj3vr', 2, '2017-12-18 18:58:54', '2018-01-16 14:08:17'),
('Zdr7xyX2SXlwANsAGOmyGSJQ3qRDkp0tAdYU7ijvX1ClqCI7uZjIlfer9KeFT_Yl7xn85uzqWLp5NiCiLGXKmabrhF40qaEVnnWGApsSyp-eGGmnCh2YS5IumdEpTE7LJl-J1CK3y6i2-QIVK323TtTpYrU1lNmuhAFJY0TxBhqs05TpAHiD', 2, '2018-04-30 16:55:08', '2018-04-30 16:55:08'),
('ZeExqi4pQ44V4xraN6qVfBy4rdW9ltKQXDIuymOl0ZJiziMpjtprpcIYDlzouav-pqIE5a9shQ_CQRSkXXRfyZnBBwn2TlCn8utFor3KZlh90XuoE9wGPgI1LEgrp0OCykMTIH02tocEdacZRIDInPtFCngVUg5z3_b7sjjfj3Q3nn--exfQ', 1, '2018-07-20 13:00:09', '2018-07-26 19:24:42');

-- --------------------------------------------------------

--
-- テーブルの構造 `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
`department_id` int(10) unsigned NOT NULL,
  `department_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `department_parent_id` int(11) NOT NULL,
  `department_parent_id_all` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department_layer` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='部署' AUTO_INCREMENT=41 ;

--
-- テーブルのデータのダンプ `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `department_parent_id`, `department_parent_id_all`, `department_layer`, `created_at`, `updated_at`) VALUES
(1, '制作部', 0, '', 0, '2017-06-06 00:00:00', '2017-06-06 00:00:00'),
(2, 'web広告事業部', 0, '', 0, '2017-06-06 00:00:00', '2017-06-06 00:00:00'),
(17, 'デザイン課', 1, ',1,', 1, '2017-06-09 08:06:51', '2017-06-09 08:06:51'),
(19, 'システム開発部', 0, '', 0, '2017-06-09 08:07:37', '2017-06-23 11:53:59'),
(20, 'デザイン課2', 17, ',1,17,', 2, '2017-06-09 08:08:01', '2017-06-27 05:14:38'),
(21, 'システム開発ベトナム支部', 19, ',19,', 1, '2017-06-10 04:04:23', '2017-06-26 02:50:04'),
(23, 'SEO課', 1, ',1,', 1, '2017-06-10 04:13:39', '2017-06-10 04:13:39'),
(24, 'デザイン課3', 20, ',1,17,20,', 3, '2017-06-10 05:18:08', '2017-06-27 05:14:42'),
(25, 'オフィスエム', 0, '', 0, '2017-06-19 00:56:15', '2017-06-19 00:56:15'),
(26, 'Passend 人材派遣', 0, '', 0, '2017-06-19 00:56:36', '2017-06-26 08:28:31'),
(27, 'SHS', 0, '', 0, '2017-06-19 00:57:52', '2017-06-19 00:57:52'),
(29, 'SEO2', 23, ',1,23,', 2, '2017-06-23 02:09:25', '2017-06-23 02:09:25'),
(32, 'TRY18運営事業部', 27, ',27,', 1, '2017-06-23 06:52:24', '2017-06-23 06:52:24'),
(33, 'システム開発東京支部', 19, ',19,', 1, '2017-06-26 06:45:52', '2017-06-26 06:46:30'),
(35, 'フォトスタジオ事業部', 0, '', 0, '2017-06-26 07:06:55', '2017-06-26 07:06:55'),
(36, 'days博多リバレイン', 35, ',35,', 1, '2017-06-26 07:08:15', '2017-06-26 07:08:15'),
(39, 'abc', 35, ',35,', 1, '2017-08-01 08:58:11', '2017-08-01 08:58:11');

-- --------------------------------------------------------

--
-- テーブルの構造 `dependents`
--

CREATE TABLE IF NOT EXISTS `dependents` (
`dependent_id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `dependent_kanji_last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓（漢字',
  `dependent_kanji_first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '名（漢字',
  `dependent_kata_last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓（フリガナ）',
  `dependent_kata_first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '名（フリガナ）',
  `dependent_gender` enum('男','女') COLLATE utf8_unicode_ci NOT NULL COMMENT '性別',
  `dependent_relative` enum('配偶者','子','父','母','兄弟') COLLATE utf8_unicode_ci NOT NULL COMMENT '家族',
  `dependent_social` enum('扶養','対象外') COLLATE utf8_unicode_ci NOT NULL COMMENT '社会保険の扶養',
  `dependent_tax` enum('扶養','対象外') COLLATE utf8_unicode_ci NOT NULL COMMENT '税法上の扶養',
  `dependent_birthday` date NOT NULL COMMENT '生年月日',
  `dependent_retire_code` bigint(20) NOT NULL COMMENT '基礎年金番号',
  `dependent_tel` bigint(20) NOT NULL COMMENT 'マイナンバー',
  `dependent_social_insurrance` enum('加入','未加入') COLLATE utf8_unicode_ci NOT NULL COMMENT '社会保険',
  `dependent_insurance_join_date` date NOT NULL COMMENT '社会保険資格取得年月日',
  `dependent_insurance_card` bigint(20) NOT NULL COMMENT '社会保険の記号',
  `dependent_social_insurance_number` bigint(20) NOT NULL COMMENT '社会保険の番号',
  `dependent_address` enum('本人と同居','他の住所に居住') COLLATE utf8_unicode_ci NOT NULL COMMENT '住所',
  `dependent_post_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '郵便番号',
  `dependent_post_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '住所',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- テーブルのデータのダンプ `dependents`
--

INSERT INTO `dependents` (`dependent_id`, `user_id`, `dependent_kanji_last_name`, `dependent_kanji_first_name`, `dependent_kata_last_name`, `dependent_kata_first_name`, `dependent_gender`, `dependent_relative`, `dependent_social`, `dependent_tax`, `dependent_birthday`, `dependent_retire_code`, `dependent_tel`, `dependent_social_insurrance`, `dependent_insurance_join_date`, `dependent_insurance_card`, `dependent_social_insurance_number`, `dependent_address`, `dependent_post_code`, `dependent_post_address`, `created_at`, `updated_at`) VALUES
(1, 2, '進藤', '蓮', 'シンドウ', 'レン', '男', '子', '扶養', '扶養', '2015-12-20', 0, 0, '加入', '2017-12-01', 0, 0, '本人と同居', '', '', '2017-12-18 19:20:38', '2017-12-18 19:20:38');

-- --------------------------------------------------------

--
-- テーブルの構造 `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
`district_id` int(10) unsigned NOT NULL,
  `district_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

--
-- テーブルのデータのダンプ `districts`
--

INSERT INTO `districts` (`district_id`, `district_name`) VALUES
(1, '北海道'),
(2, '青森県'),
(3, '岩手県'),
(4, '宮城県'),
(5, '秋田県'),
(6, '山形県'),
(7, '福島県'),
(8, '茨城県'),
(9, '栃木県'),
(10, '群馬県'),
(11, '埼玉県'),
(12, '千葉県'),
(13, '東京都'),
(14, '神奈川県'),
(15, '新潟県'),
(16, '富山県'),
(17, '石川県'),
(18, '福井県'),
(19, '山梨県'),
(20, '長野県'),
(21, '岐阜県'),
(22, '静岡県'),
(23, '愛知県'),
(24, '三重県'),
(25, '滋賀県'),
(26, '京都府'),
(27, '大阪府'),
(28, '兵庫県'),
(29, '奈良県'),
(30, '和歌山県'),
(31, '鳥取県'),
(32, '島根県'),
(33, '岡山県'),
(34, '広島県'),
(35, '山口県'),
(36, '徳島県'),
(37, '香川県'),
(38, '愛媛県'),
(39, '高知県'),
(40, '福岡県'),
(41, '佐賀県'),
(42, '長崎県'),
(43, '熊本県'),
(44, '大分県'),
(45, '宮崎県'),
(46, '鹿児島県'),
(47, '沖縄県');

-- --------------------------------------------------------

--
-- テーブルの構造 `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
`log_id` int(10) unsigned NOT NULL,
  `log_type` enum('売上') COLLATE utf8_unicode_ci NOT NULL,
  `log_content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=126 ;

--
-- テーブルのデータのダンプ `logs`
--

INSERT INTO `logs` (`log_id`, `log_type`, `log_content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:03:40', '2018-01-10 02:03:40'),
(2, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:03:44', '2018-01-10 02:03:44'),
(3, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"3";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:03:51', '2018-01-10 02:03:51'),
(4, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"4";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:03:51', '2018-01-10 02:03:51'),
(5, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:21:20', '2018-01-10 02:21:20'),
(6, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:22:05', '2018-01-10 02:22:05'),
(7, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:22:17', '2018-01-10 02:22:17'),
(8, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:22:24', '2018-01-10 02:22:24'),
(9, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:25:12', '2018-01-10 02:25:12'),
(10, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:25:18', '2018-01-10 02:25:18'),
(11, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:25:25', '2018-01-10 02:25:25'),
(12, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"4週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:28:20', '2018-01-10 02:28:20'),
(13, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:28:53', '2018-01-10 02:28:53'),
(14, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"4週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:36:20', '2018-01-10 02:36:20'),
(15, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:36:21', '2018-01-10 02:36:21'),
(16, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:36:21', '2018-01-10 02:36:21'),
(17, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:36:22', '2018-01-10 02:36:22'),
(18, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:36:23', '2018-01-10 02:36:23'),
(19, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:36:25', '2018-01-10 02:36:25'),
(20, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:36:26', '2018-01-10 02:36:26'),
(21, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:36:29', '2018-01-10 02:36:29'),
(22, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:37:33', '2018-01-10 02:37:33'),
(23, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:38:35', '2018-01-10 02:38:35'),
(24, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:39:00', '2018-01-10 02:39:00'),
(25, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:39:44', '2018-01-10 02:39:44'),
(26, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:39:47', '2018-01-10 02:39:47'),
(27, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:41:00', '2018-01-10 02:41:00'),
(28, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:41:06', '2018-01-10 02:41:06'),
(29, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:41:12', '2018-01-10 02:41:12'),
(30, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:41:17', '2018-01-10 02:41:17'),
(31, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:41:34', '2018-01-10 02:41:34'),
(32, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:44:36', '2018-01-10 02:44:36'),
(33, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:44:43', '2018-01-10 02:44:43'),
(34, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:44:52', '2018-01-10 02:44:52'),
(35, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:45:02', '2018-01-10 02:45:02'),
(36, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:4:"DAYS";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:47:53', '2018-01-10 02:47:53'),
(37, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:4:"DAYS";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:47:53', '2018-01-10 02:47:53'),
(38, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"4週目";s:16:"sales_department";s:4:"DAYS";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:47:55', '2018-01-10 02:47:55'),
(39, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:48:06', '2018-01-10 02:48:06'),
(40, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:48:10', '2018-01-10 02:48:10'),
(41, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"3";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:48:14', '2018-01-10 02:48:14'),
(42, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"3";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:48:18', '2018-01-10 02:48:18'),
(43, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:48:28', '2018-01-10 02:48:28'),
(44, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"6";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:48:32', '2018-01-10 02:48:32'),
(45, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"5";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:48:35', '2018-01-10 02:48:35'),
(46, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:48:39', '2018-01-10 02:48:39'),
(47, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"6";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:48:43', '2018-01-10 02:48:43'),
(48, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"6";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:48:48', '2018-01-10 02:48:48'),
(49, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"6";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:48:51', '2018-01-10 02:48:51'),
(50, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"7";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:49:04', '2018-01-10 02:49:04'),
(51, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"3";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:50:18', '2018-01-10 02:50:18'),
(52, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:50:23', '2018-01-10 02:50:23'),
(53, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:53:01', '2018-01-10 02:53:01'),
(54, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:53:52', '2018-01-10 02:53:52'),
(55, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:54:48', '2018-01-10 02:54:48'),
(56, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"4週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:55:09', '2018-01-10 02:55:09'),
(57, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"4週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:56:14', '2018-01-10 02:56:14'),
(58, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"4週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:56:25', '2018-01-10 02:56:25'),
(59, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"4週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:57:35', '2018-01-10 02:57:35'),
(60, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"5週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:58:05', '2018-01-10 02:58:05'),
(61, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"5週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:58:30', '2018-01-10 02:58:30'),
(62, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"5週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 02:58:34', '2018-01-10 02:58:34'),
(63, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"5週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 03:00:09', '2018-01-10 03:00:09'),
(64, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"5週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 03:00:57', '2018-01-10 03:00:57'),
(65, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"5週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 03:01:01', '2018-01-10 03:01:01'),
(66, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"5週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 03:01:06', '2018-01-10 03:01:06'),
(67, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"2";s:15:"sales_week_some";s:7:"5週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 03:01:11', '2018-01-10 03:01:11'),
(68, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"5週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 03:01:13', '2018-01-10 03:01:13'),
(69, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"3";s:15:"sales_week_some";s:7:"5週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 03:02:19', '2018-01-10 03:02:19'),
(70, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"5週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-10";}', 2, '2018-01-10 03:02:22', '2018-01-10 03:02:22'),
(71, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:3:"1.2";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 03:41:48', '2018-01-12 03:41:48'),
(72, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:6:"1.2444";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 03:41:53', '2018-01-12 03:41:53'),
(73, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:10:"1.24446666";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 03:42:02', '2018-01-12 03:42:02'),
(74, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:6:"500.56";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 03:42:13', '2018-01-12 03:42:13'),
(75, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:6:"500.56";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 03:42:24', '2018-01-12 03:42:24'),
(76, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:6:"856.93";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 06:14:18', '2018-01-12 06:14:18'),
(77, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:6:"557.77";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 06:14:24', '2018-01-12 06:14:24'),
(78, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:5:"27.77";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:4:"DAYS";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 06:14:29', '2018-01-12 06:14:29'),
(79, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"4週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 06:16:22', '2018-01-12 06:16:22'),
(80, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 06:16:22', '2018-01-12 06:16:22'),
(81, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 06:16:23', '2018-01-12 06:16:23'),
(82, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 06:44:12', '2018-01-12 06:44:12'),
(83, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:6:"856.93";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-12";}', 2, '2018-01-12 06:44:42', '2018-01-12 06:44:42'),
(84, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:3:"500";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-19";}', 2, '2018-01-19 06:29:31', '2018-01-19 06:29:31'),
(85, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:3:"200";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-19";}', 2, '2018-01-19 06:29:39', '2018-01-19 06:29:39'),
(86, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:3:"700";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-19";}', 2, '2018-01-19 06:29:42', '2018-01-19 06:29:42'),
(87, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:3:"454";s:15:"sales_week_some";s:7:"3週目";s:16:"sales_department";s:15:"kazcom事業部";s:21:"sales_week_year_month";s:7:"2018-01";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=01-19";}', 2, '2018-01-19 06:30:16', '2018-01-19 06:30:16'),
(88, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:4:"1092";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-02";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-03";}', 2, '2018-04-03 07:55:58', '2018-04-03 07:55:58'),
(89, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:3:"878";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-02";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-03";}', 2, '2018-04-03 07:56:02', '2018-04-03 07:56:02'),
(90, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:6:"853.58";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-02";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-03";}', 2, '2018-04-03 07:56:05', '2018-04-03 07:56:05'),
(91, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:6:"484.79";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-02";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-03";}', 2, '2018-04-03 07:56:15', '2018-04-03 07:56:15'),
(92, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:6:"440.72";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-02";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-03";}', 2, '2018-04-03 07:56:18', '2018-04-03 07:56:18'),
(93, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:6:"446.56";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-02";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-03";}', 2, '2018-04-03 07:56:21', '2018-04-03 07:56:21'),
(94, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:2:"84";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:4:"DAYS";s:21:"sales_week_year_month";s:7:"2018-02";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-03";}', 2, '2018-04-03 07:56:35', '2018-04-03 07:56:35'),
(95, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:2:"74";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:4:"DAYS";s:21:"sales_week_year_month";s:7:"2018-02";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-03";}', 2, '2018-04-03 07:56:39', '2018-04-03 07:56:39'),
(96, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:5:"91.75";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:4:"DAYS";s:21:"sales_week_year_month";s:7:"2018-02";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-03";}', 2, '2018-04-03 07:56:42', '2018-04-03 07:56:42'),
(97, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:3:"100";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 05:15:04', '2018-04-30 05:15:04'),
(98, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:3:"100";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 05:15:13', '2018-04-30 05:15:13'),
(99, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:3:"150";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 05:15:16', '2018-04-30 05:15:16'),
(100, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:3:"150";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 05:15:17', '2018-04-30 05:15:17'),
(101, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:3:"120";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 05:15:22', '2018-04-30 05:15:22'),
(102, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:3:"160";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 05:15:25', '2018-04-30 05:15:25'),
(103, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:3:"100";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 05:15:39', '2018-04-30 05:15:39'),
(104, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:3:"100";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 05:15:40', '2018-04-30 05:15:40'),
(105, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:3:"200";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 05:15:42', '2018-04-30 05:15:42'),
(106, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:3:"300";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 05:15:44', '2018-04-30 05:15:44'),
(107, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:2:"50";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 05:15:47', '2018-04-30 05:15:47'),
(108, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:2:"80";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 05:15:49', '2018-04-30 05:15:49'),
(109, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:5:"150.8";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 06:40:00', '2018-04-30 06:40:00'),
(110, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:5:"200.6";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-04";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=04-30";}', 2, '2018-04-30 06:40:04', '2018-04-30 06:40:04'),
(111, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:3:"500";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-05";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=05-01";}', 2, '2018-05-01 03:50:42', '2018-05-01 03:50:42'),
(112, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:3:"300";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-05";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=05-01";}', 2, '2018-05-01 03:50:45', '2018-05-01 03:50:45'),
(113, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:3:"200";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-05";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=05-01";}', 2, '2018-05-01 03:50:46', '2018-05-01 03:50:46'),
(114, '売上', 'a:8:{s:10:"sales_type";s:9:"ノルマ";s:11:"sales_value";s:3:"200";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-05";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=05-01";}', 2, '2018-05-01 03:50:49', '2018-05-01 03:50:49'),
(115, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:3:"800";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-05";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=05-01";}', 2, '2018-05-01 03:50:54', '2018-05-01 03:50:54'),
(116, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:3:"500";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-05";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=05-01";}', 2, '2018-05-01 03:50:56', '2018-05-01 03:50:56'),
(117, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:3:"400";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-05";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=05-01";}', 2, '2018-05-01 03:51:01', '2018-05-01 03:51:01'),
(118, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:3:"600";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-05";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=05-01";}', 2, '2018-05-01 03:51:07', '2018-05-01 03:51:07'),
(119, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:3:"300";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-05";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=05-01";}', 2, '2018-05-01 03:51:15', '2018-05-01 03:51:15'),
(120, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:3:"300";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-05";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=05-01";}', 2, '2018-05-01 03:51:15', '2018-05-01 03:51:15'),
(121, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:3:"100";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-05";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=05-01";}', 2, '2018-05-01 03:51:18', '2018-05-01 03:51:18'),
(122, '売上', 'a:8:{s:10:"sales_type";s:6:"売上";s:11:"sales_value";s:3:"400";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:24:"SHS（派遣・求人）";s:21:"sales_week_year_month";s:7:"2018-05";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=05-01";}', 2, '2018-05-01 03:51:21', '2018-05-01 03:51:21'),
(123, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"3";s:15:"sales_week_some";s:7:"1週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-06";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=07-05";}', 2, '2018-07-05 09:32:40', '2018-07-05 09:32:40'),
(124, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"3";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-06";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=07-05";}', 2, '2018-07-05 09:32:43', '2018-07-05 09:32:43'),
(125, '売上', 'a:8:{s:10:"sales_type";s:6:"目標";s:11:"sales_value";s:1:"0";s:15:"sales_week_some";s:7:"2週目";s:16:"sales_department";s:18:"オフィスエム";s:21:"sales_week_year_month";s:7:"2018-06";s:9:"user_name";s:7:"進藤 ";s:7:"user_id";s:1:"2";s:7:"created";s:10:"2018=07-05";}', 2, '2018-07-05 09:32:50', '2018-07-05 09:32:50');

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2017_06_06_045903_create_departments_table', 1),
('2017_06_10_074559_create_users', 1),
('2017_06_13_084517_create_sessions', 1),
('2017_06_28_051509_create_minutes_groups', 1),
('2017_06_28_054039_create_minutes_details', 1),
('2017_06_28_060518_create_minutes_users', 1),
('2017_07_18_104208_create_permission_types_table', 1),
('2017_07_18_104209_create_permissions', 1),
('2017_07_25_074149_create_user_details', 1),
('2017_07_25_102601_create_logs', 1),
('2017_08_01_024305_create_paid_vacations_table', 1),
('2017_08_03_043929_create_districts_table', 1),
('2017_08_07_061951_create_user_banks_table', 1),
('2017_08_08_084327_create_salaries_table', 1),
('2017_08_10_090557_create_user_permissions_table', 1),
('2017_08_10_091930_create_permission_passwords_table', 1),
('2017_08_11_064350_create_dependents_table', 1),
('2017_08_12_122837_create_auto_logins', 1),
('2017_08_23_153847_create_sales_weeks', 1),
('2017_08_23_171208_create_sales_departments', 1),
('2017_08_29_173436_create_user_detail_logs', 1),
('2017_09_14_172304_create_sales_costs_table', 1),
('2017_12_22_175626_edit_user_detail', 2),
('2017_12_28_143738_edit_user_detail', 3),
('2018_01_16_165643_edit_user_detail', 4),
('2018_04_06_124448_add_column_flag_sales_department', 4),
('2018_04_06_144607_add_column_display_data_sales_departments', 5),
('2018_04_30_171448_add_column_position_users', 6),
('2018_07_13_093904_create_service_worker', 7);

-- --------------------------------------------------------

--
-- テーブルの構造 `minutes_details`
--

CREATE TABLE IF NOT EXISTS `minutes_details` (
`minutes_detail_id` int(10) unsigned NOT NULL,
  `minutes_group_id` int(11) NOT NULL,
  `minutes_detail_text` text COLLATE utf8_unicode_ci NOT NULL,
  `minutes_detail_agenda` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minutes_detail_user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minutes_detail_date` datetime NOT NULL COMMENT '実施日時',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=113 ;

--
-- テーブルのデータのダンプ `minutes_details`
--

INSERT INTO `minutes_details` (`minutes_detail_id`, `minutes_group_id`, `minutes_detail_text`, `minutes_detail_agenda`, `user_id`, `minutes_detail_user_name`, `minutes_detail_date`, `created_at`, `updated_at`) VALUES
(4, 1013, '<p>あああ</p>\n\n                <p>&nbsp;</p>\n\n                <p>&nbsp;</p>\n\n                <p><span style="background-color:#2980b9">sっっっd</span></p>\n\n                <p>&nbsp;</p>\n\n                <p>&nbsp;</p>\n\n                <p>&nbsp;</p>\n\n                <p><u>fだfdさ</u></p>\n                ', '', '', '', '2017-07-10 19:36:00', '2017-07-10 10:36:42', '2017-07-10 10:36:42'),
(5, 1012, '<p>aa</p>\n                ', '', '', '', '2017-07-22 15:21:00', '2017-07-11 06:21:33', '2017-07-11 06:21:33'),
(6, 1012, '<p>dfsa</p>\n\n                <p>&nbsp;</p>\n\n                <p>&nbsp;</p>\n\n                <p><span style="color:#2980b9">ふぁsdふぁs</span></p>\n\n                <p>&nbsp;</p>\n\n                <h2>fdさ</h2>\n                ', '', '', '', '2017-07-06 11:00:00', '2017-07-11 06:25:15', '2017-07-11 06:25:15'),
(7, 1012, '<p>Laravelのセッションのバックエンドにドライバーを追加したい場合、<code>Session</code><a href="https://readouble.com/laravel/5.1/ja/facades.html">ファサード</a>の<code>extend</code>メソッドを使用します。<a href="https://readouble.com/laravel/5.1/ja/providers.html">サービスプロバイダー</a>の<code>boot</code>メソッドから<code>extend</code>メソッドを呼び出してください。</p>\n                ', '', '2', '', '2017-07-05 15:47:00', '2017-07-11 06:47:32', '2017-07-11 06:47:32'),
(8, 1012, '<p>さて、、日付を出力する際に、色々と試行錯誤してしまったため、情報共有できればと思い始めて書きました！</p>\n\n                <p>例えばDBから抽出したものをそのまま表示しようとすると、</p>\n\n                <blockquote>\n                <p>YYYY-MM-DD<br />\n                YYYY-MM-DD HH:ii:ss</p>\n                </blockquote>\n\n                <p>といった感じで出てしまうため、blade内では例えば</p>\n\n                <pre>\n                {!! date(&#39;Y/m/d&#39;, strtotime($user-&gt;date) !!}\n                </pre>\n\n                <p>といった記述が必要になるかと思います。<br />\n                しかし、特に問題になったのが「曜日」の表示。<br />\n                それを要件に出された時、一瞬頭が白くなりましたｗ</p>\n\n                <p>smartyには慣れていたので、どうにかしてbladeも拡張できないものかと。</p>\n                ', '', '2000000', '', '2017-07-28 15:50:00', '2017-07-11 06:50:21', '2017-07-11 06:50:21'),
(9, 1013, '<p>あああ</p>\n\n                <p>&nbsp;</p>\n\n                <h1><span style="color:#2980b9">あfdさfsだ</span></h1>\n\n                <h1>&nbsp;</h1>\n\n                <p>&nbsp;</p>\n\n                <p>&nbsp;</p>\n\n                <p>fdさfs</p>\n                ', '', '2', '', '2017-07-07 16:03:00', '2017-07-11 07:03:47', '2017-07-11 07:03:47'),
(10, 1012, '<p>で</p>\n\n                <blockquote>\n                <p>YYYY/MM/DD(曜日)</p>\n                </blockquote>\n\n                <p>と出力することが出来ます。</p>\n\n                <p>注意として、コンパイルされたファイルを一旦削除する必要があります。</p>\n\n                <pre>\n                <span style="background-color:#3498db">php artisan clear-compiled\n                </span></pre>\n\n                <p>もしくは</p>\n\n                <pre>\n                storage/framework/views/ 内のファイルを削除\n                </pre>\n\n                <p>応用すれば日付の出力フォーマットを固定することも出来ると思います。<br />\n                参考になればと思います。</p>\n\n                <p>また、こうした方がいいんじゃない？とかのアドバイスなどもあれば是非お願いします！</p>\n                ', '', '2', '', '2017-07-11 16:23:00', '2017-07-11 07:23:49', '2017-07-11 07:23:49'),
(11, 1012, '<p><span style="color:#9b59b6"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">あああ</span></span></p>\n\n                <p>&nbsp;</p>\n\n                <p>fdさfさ</p>\n\n                <p>&nbsp;</p>\n\n                <p>&nbsp;</p>\n\n                <p>fdさ</p>\n                ', '', '2', '', '2017-07-12 11:06:00', '2017-07-12 02:07:03', '2017-07-12 02:07:03'),
(12, 1012, '<p>ああ</p>\n\n                <p>&nbsp;</p>\n\n                <p>&nbsp;</p>\n\n                <h1>dfさfdさ</h1>\n\n                <h1>&nbsp;</h1>\n\n                <p>&nbsp;</p>\n\n                <p>dふぁsdさ</p>\n\n                <p>&nbsp;</p>\n                ', '', '2', '', '2017-07-07 11:07:00', '2017-07-12 02:07:27', '2017-07-12 02:07:27'),
(13, 1014, '<p><span style="color:#9b59b6">山ちゃんが検診でひっかかった</span></p>\n\n                <p>進藤が検診でひかかった</p>\n\n                <p>&nbsp;</p>\n                ', '', '2', '', '2017-07-12 13:26:00', '2017-07-12 04:27:32', '2017-07-12 04:27:32'),
(14, 1014, '<p>あああ</p>\n\n                <p>&nbsp;</p>\n\n                <p>fdさfsd</p>\n\n                <p>&nbsp;</p>\n\n                <p>&nbsp;</p>\n\n                <p>fdさfds</p>\n                ', '', '2', '', '2017-07-12 19:00:00', '2017-07-12 10:04:20', '2017-07-12 10:04:20'),
(15, 1014, '<h2>Blade拡張</h2>\n\n                <p>Bladeでは自分のカスタムディレクティブも定義することができます。<code>directive</code>メソッドを使い、ディレクティブを登録します。Bladeコンパイラーがそのディレクティブを見つけると、引数に指定したコールバックが呼びだされます。</p>\n\n                <p>次の例は<code>@datetime($var)</code>ディレクティブを作成し、渡された<code>$var</code>をフォーマットします。</p>\n\n                <pre>\n\n                &nbsp;</pre>\n\n                <p>&nbsp;</p>\n\n                <p>ご覧の通り、このディレクティブではLaravelの<code>with</code>ヘルパ関数が使われています。<code>with</code>ヘルパはシンプルに指定されたオブジェクト／値を返します。メソッドチェーンを行うのに便利です。このディレクティブにより最終的に生成されるコードは、次の通りです。</p>\n\n                <p>&nbsp;</p>\n\n                <p>ご覧の通り、このディレクティブではLaravelの<code>with</code>ヘルパ関数が使われています。<code>with</code>ヘルパはシンプルに指定されたオブジェクト／値を返します。メソッドチェーンを行うのに便利です。このディレクティブにより最終的に生成されるコードは、次の通りです。</p>\n\n                <p>&nbsp;</p>\n\n                <h2>Blade拡張</h2>\n\n                <p>Bladeでは自分のカスタムディレクティブも定義することができます。<code>directive</code>メソッドを使い、ディレクティブを登録します。Bladeコンパイラーがそのディレクティブを見つけると、引数に指定したコールバックが呼びだされます。</p>\n\n                <p>次の例は<code>@datetime($var)</code>ディレクティブを作成し、渡された<code>$var</code>をフォーマットします。</p>\n\n                <pre>\n\n                &nbsp;</pre>\n\n                <p>&nbsp;</p>\n\n                <p>ご覧の通り、このディレクティブではLaravelの<code>with</code>ヘルパ関数が使われています。<code>with</code>ヘルパはシンプルに指定されたオブジェクト／値を返します。メソッドチェーンを行うのに便利です。このディレクティブにより最終的に生成されるコードは、次の通りです。</p>\n\n                <p>&nbsp;</p>\n\n                <p>ご覧の通り、このディレクティブではLaravelの<code>with</code>ヘルパ関数が使われています。<code>with</code>ヘルパはシンプルに指定されたオブジェクト／値を返します。メソッドチェーンを行うのに便利です。このディレクティブにより最終的に生成されるコードは、次の通りです。</p>\n                ', '', '2', '', '2017-07-13 13:38:00', '2017-07-13 04:39:46', '2017-07-13 04:39:46'),
(16, 1014, '<p>おおおお</p>\n\n                <p>&nbsp;</p>\n\n                <p>fだfdさあdsf</p>\n\n                <p>&nbsp;</p>\n\n                <p>fdさsd</p>\n                ', '', '2', '', '2017-07-13 14:32:00', '2017-07-13 05:33:19', '2017-07-13 05:33:19'),
(17, 1015, '<p>みんなでやればいいと思う。</p>\n\n                <p>誰か担当者を決めないとぐずぐずになる。</p>\n\n                <p>&nbsp;</p>\n\n                <p>でもみんなやりたがらない。</p>\n                ', 'sdafasd\n\n                fdsafsda', '315', '', '2017-07-13 11:22:00', '2017-07-14 02:23:57', '2017-07-19 08:04:08'),
(18, 11, '<p>fddsa</p>\n                ', '', '2', '', '2017-07-13 11:39:00', '2017-07-14 02:40:01', '2017-07-14 02:40:01'),
(19, 1012, '<p><span style="font-size:20px"><span style="background-color:#f1c40f">あああ</span></span></p>\n\n                <p>&nbsp;</p>\n\n                <p>fdさfsだ</p>\n\n                <p>&nbsp;</p>\n\n                <p>&nbsp;</p>\n\n                <p>fdさs</p>\n                ', '', '2', '', '2017-07-12 11:40:00', '2017-07-14 02:41:31', '2017-07-14 02:41:31'),
(20, 1012, '<p>fdsafsd</p>\n                ', '', '2', '', '2017-07-08 11:50:00', '2017-07-14 02:50:10', '2017-07-14 02:50:10'),
(21, 1012, '<p>sfds</p>\n                ', '', '2', '', '2017-07-29 11:50:00', '2017-07-14 02:50:29', '2017-07-19 03:33:54'),
(22, 1012, '<p>dsafdsafdas</p>\n                ', '', '2', '', '2017-07-14 12:15:00', '2017-07-14 03:15:31', '2017-07-14 03:15:31'),
(23, 1012, '<p>dsafdsafdas</p>\n                ', '', '2', '', '2017-07-14 12:15:00', '2017-07-14 03:17:39', '2017-07-14 03:17:39'),
(24, 6, '<p>dふぁs</p>\n                ', '', '2', '', '2017-07-14 12:18:00', '2017-07-14 03:18:48', '2017-07-14 03:18:48'),
(25, 1014, '<h1>どういうことだ</h1>\n\n                <p>ちょっと例を添えて説明</p>\n\n                <p>下記2例のように<br />\n                データを保存をすることがあるかと思う</p>\n\n                <p>update()を使った場合</p>\n\n                <pre>\n                App\\Flight::where(&#39;id&#39;, 1)\n                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);\n                </pre>\n\n                <p>save()を使った場合</p>\n\n                <pre>\n                $flight = App\\Flight::find(1)\n                $flight-&gt;name = $request-&gt;name;\n                $flight-&gt;save();\n                </pre>\n\n                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>\n\n                <h3><code>save()</code></h3>\n\n                <p>updated_atのカラムが更新されない</p>\n\n                <h3><code>update()</code></h3>\n\n                <p>updated_atのカラムが更新される</p>\n                ', '', '2', '', '2017-07-21 12:31:00', '2017-07-14 03:31:25', '2017-07-18 04:57:51'),
(26, 25, '<h1>どういうことだ</h1>\n\n                <p>ちょっと例を添えて説明</p>\n\n                <p>下記2例のように<br />\n                データを保存をすることがあるかと思う</p>\n\n                <p>update()を使った場合</p>\n\n                <pre>\n                App\\Flight::where(&#39;id&#39;, 1)\n                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);\n                </pre>\n\n                <p>save()を使った場合</p>\n\n                <pre>\n                $flight = App\\Flight::find(1)\n                $flight-&gt;name = $request-&gt;name;\n                $flight-&gt;save();\n                </pre>\n\n                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>\n\n                <h3><code>save()</code></h3>\n\n                <p>updated_atのカラムが更新されない</p>\n\n                <h3><code>update()</code></h3>\n\n                <p>updated_atのカラムが更新される</p>\n                ', '', '2', '', '2017-07-14 12:31:00', '2017-07-18 04:33:57', '2017-07-18 04:33:57'),
(27, 25, '<h1>どういうことだ</h1>\n\n                <p>ちょっと例を添えて説明</p>\n\n                <p>下記2例のように<br />\n                データを保存をすることがあるかと思う</p>\n\n                <p>update()を使った場合</p>\n\n                <pre>\n                App\\Flight::where(&#39;id&#39;, 1)\n                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);\n                </pre>\n\n                <p>save()を使った場合</p>\n\n                <pre>\n                $flight = App\\Flight::find(1)\n                $flight-&gt;name = $request-&gt;name;\n                $flight-&gt;save();\n                </pre>\n\n                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>\n\n                <h3><code>save()</code></h3>\n\n                <p>updated_atのカラムが更新されない</p>\n\n                <h3><code>update()</code></h3>\n\n                <p>updated_atのカラムが更新される</p>\n                ', '', '2', '', '2017-07-14 12:31:00', '2017-07-18 04:34:33', '2017-07-18 04:34:33'),
(28, 25, '<h1>どういうことだ</h1>\n\n                <p>ちょっと例を添えて説明</p>\n\n                <p>下記2例のように<br />\n                データを保存をすることがあるかと思う</p>\n\n                <p>update()を使った場合</p>\n\n                <pre>\n                App\\Flight::where(&#39;id&#39;, 1)\n                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);\n                </pre>\n\n                <p>save()を使った場合</p>\n\n                <pre>\n                $flight = App\\Flight::find(1)\n                $flight-&gt;name = $request-&gt;name;\n                $flight-&gt;save();\n                </pre>\n\n                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>\n\n                <h3><code>save()</code></h3>\n\n                <p>updated_atのカラムが更新されない</p>\n\n                <h3><code>update()</code></h3>\n\n                <p>updated_atのカラムが更新される</p>\n                ', '', '2', '', '2017-07-14 12:31:00', '2017-07-18 04:41:44', '2017-07-18 04:41:44'),
(29, 25, '<h1>どういうことだ</h1>\n\n                <p>ちょっと例を添えて説明</p>\n\n                <p>下記2例のように<br />\n                データを保存をすることがあるかと思う</p>\n\n                <p>update()を使った場合</p>\n\n                <pre>\n                App\\Flight::where(&#39;id&#39;, 1)\n                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);\n                </pre>\n\n                <p>save()を使った場合</p>\n\n                <pre>\n                $flight = App\\Flight::find(1)\n                $flight-&gt;name = $request-&gt;name;\n                $flight-&gt;save();\n                </pre>\n\n                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>\n\n                <h3><code>save()</code></h3>\n\n                <p>updated_atのカラムが更新されない</p>\n\n                <h3><code>update()</code></h3>\n\n                <p>updated_atのカラムが更新される</p>\n                ', '', '2', '', '2017-07-14 12:31:00', '2017-07-18 04:44:54', '2017-07-18 04:44:54'),
(30, 25, '<h1>どういうことだ</h1>\n\n                <p>ちょっと例を添えて説明</p>\n\n                <p>下記2例のように<br />\n                データを保存をすることがあるかと思う</p>\n\n                <p>update()を使った場合</p>\n\n                <pre>\n                App\\Flight::where(&#39;id&#39;, 1)\n                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);\n                </pre>\n\n                <p>save()を使った場合</p>\n\n                <pre>\n                $flight = App\\Flight::find(1)\n                $flight-&gt;name = $request-&gt;name;\n                $flight-&gt;save();\n                </pre>\n\n                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>\n\n                <h3><code>save()</code></h3>\n\n                <p>updated_atのカラムが更新されない</p>\n\n                <h3><code>update()</code></h3>\n\n                <p>updated_atのカラムが更新される</p>\n                ', '', '2', '', '2017-07-14 12:31:00', '2017-07-18 04:46:49', '2017-07-18 04:46:49'),
(31, 25, '<h1>どういうことだ</h1>\n\n                <p>ちょっと例を添えて説明</p>\n\n                <p>下記2例のように<br />\n                データを保存をすることがあるかと思う</p>\n\n                <p>update()を使った場合</p>\n\n                <pre>\n                App\\Flight::where(&#39;id&#39;, 1)\n                          -&gt;update([&#39;name&#39; =&gt; $request-&gt;name]);\n                </pre>\n\n                <p>save()を使った場合</p>\n\n                <pre>\n                $flight = App\\Flight::find(1)\n                $flight-&gt;name = $request-&gt;name;\n                $flight-&gt;save();\n                </pre>\n\n                <h2>この時、もし<code>$request-&gt;name</code>が既存データと同じデータだとしたら</h2>\n\n                <h3><code>save()</code></h3>\n\n                <p>updated_atのカラムが更新されない</p>\n\n                <h3><code>update()</code></h3>\n\n                <p>updated_atのカラムが更新される</p>\n                ', '', '2', '', '2017-07-14 12:31:00', '2017-07-18 04:50:10', '2017-07-18 04:50:10'),
(32, 0, '', '', '', '', '0000-00-00 00:00:00', '2017-07-18 04:50:36', '2017-07-18 04:50:36'),
(33, 0, '', '', '', '', '0000-00-00 00:00:00', '2017-07-18 04:50:42', '2017-07-18 04:50:42'),
(37, 1018, '<p>10年以上金融機関で働いているインフラエンジニアの落ちないサーバにするための考察です。<br />\n                ハードウェアの専門家ではないので、正確ではないかもしれません。<br />\n                今までの経験からの個人的考え方になります。</p>\n\n                <p><strong>私たちオンプレ重視のインフラエンジニアは、<br />\n                クラウドサービスではできない高可用性サーバを導入したり、<br />\n                複数台構成で１台故障しても問題ない構成のサーバはコスト重視するなど、<br />\n                システムに最適なサーバを導入しようとしています。</strong></p>\n\n                <h1>高可用性サーバを追求する目的</h1>\n\n                <p><strong>■アプリに影響を与えないように</strong><br />\n                Active/Standby構成にしていて、インフラ的にはダウンタイムが数秒だとしても、<br />\n                アプリによっては復旧に時間がかかったり、問題ないことの確認にも時間がかかってしまいます。</p>\n\n                <p>また、正しくサーバが落ちればアプリが問題ないとしても、<br />\n                サーバが中途半端な状態のままになってしまい、なんだかおかしいということもあります。</p>\n\n                <p>私たちインフラエンジニアは、できる限り落ちないサーバにすることによって、<br />\n                アプリが問題なく動くようにしたいと考えています。</p>\n\n                <p><strong>■仮想化で１ホストで複数ゲストを動かすため</strong><br />\n                最近は1サーバ(1筐体)ではCPUやメモリーやディスクを使えきれないほど高性能化しており、<br />\n                コストを抑えるためにも仮想化していく必要がありますが、<br />\n                サーバ(ホストOS)が停止すると、多くのゲストOSも停止してしまいますので、<br />\n                できる限り高可用性サーバを使いサーバが落ちることがないようにしたいと考えています。</p>\n\n                <h1>ハードウェア故障箇所ランキング</h1>\n\n                <p>ハードウェアの故障箇所のランキングを作成してみました。<br />\n                このランキングは、某自営保守を行っている販売代理店の人の情報を参考にしています。</p>\n\n                <table>\n                        <thead>\n                                <tr>\n                                        <th>Ranking</th>\n                                        <th>故障個所</th>\n                                        <th>影響</th>\n                                        <th>備考</th>\n                                </tr>\n                        </thead>\n                        <tbody>\n                                <tr>\n                                        <td>No.1</td>\n                                        <td>HDD</td>\n                                        <td>なし</td>\n                                        <td>RAIDで、故障時も影響なし</td>\n                                </tr>\n                                <tr>\n                                        <td>No.2</td>\n                                        <td>FAN</td>\n                                        <td>なし</td>\n                                        <td>複数FANが搭載されているため、影響なし</td>\n                                </tr>\n                                <tr>\n                                        <td>No.3</td>\n                                        <td>電源</td>\n                                        <td>なし</td>\n                                        <td>冗長構成できるため問題なし</td>\n                                </tr>\n                                <tr>\n                                        <td>No.4</td>\n                                        <td>メモリー</td>\n                                        <td>なし・大</td>\n                                        <td>エラーチェックによる故障検知だけだと問題なし。<br />\n                                        メモリー故障によりOS停止の経験あり。</td>\n                                </tr>\n                                <tr>\n                                        <td>No.5</td>\n                                        <td>バッテリーキャッシュ</td>\n                                        <td>小</td>\n                                        <td>キャッシュ故障だけなら、OS停止しない。<br />\n                                        書き込みが遅くなる。</td>\n                                </tr>\n                                <tr>\n                                        <td>No.6</td>\n                                        <td>アレイコントローラ</td>\n                                        <td>大</td>\n                                        <td>ファームの不具合の経験あり。<br />\n                                        OSが停止してしまう。read onlyになってしまいログインできないが動き続けていることもあります。</td>\n                                </tr>\n                                <tr>\n                                        <td>No.7</td>\n                                        <td>システムボード</td>\n                                        <td>大</td>\n                                        <td>BIOSの画面も見れなくなってしまう障害です。<br />\n                                        何度か経験はあります。</td>\n                                </tr>\n                                <tr>\n                                        <td>No.8</td>\n                                        <td>CPU</td>\n                                        <td>大</td>\n                                        <td>OSが停止してしまう。&nbsp;<br />\n                                        めったに故障しない</td>\n                                </tr>\n                                <tr>\n                                        <td>ランク外</td>\n                                        <td>NIC</td>\n                                        <td>大</td>\n                                        <td>NICドライバーがおかいいことによる疎通不可の経験あり。<br />\n                                        OSは停止しないが、OS再起動の必要あり。</td>\n                                </tr>\n                        </tbody>\n                </table>\n\n                <p>このランキングを作って思ったことは、<br />\n                よくあるような多くのハードウェア故障は影響がないということです。<br />\n                もっとも多いHDD故障でもほとんどないということです。<br />\n                まして、OSが停止してしまうような大きなハードウェア故障は、発生頻度が少ないということです。</p>\n\n                <h1>ハードウェア故障原因、サーバ停止原因</h1>\n\n                <p>今までの経験からハードウェア故障とサーバ停止原因を整理してみたいと思います。</p>\n\n                <h2>ハードの物理的故障</h2>\n\n                <p>物理的故障は時々あります。<br />\n                OSが停止してしまうような大きなハードウェア故障は、発生頻度が少ないです。<br />\n                <strong>私の経験では、OSが停止してしまう物理的ハードウェア故障は、500物理サーバあって、年1台あるかないかくらいです。</strong></p>\n\n                <h2>ファームウェアのバグ</h2>\n\n                <p>ファームウェアは以下のハードの中にあるプログラムです。</p>\n\n                <ul>\n                        <li>アレイコントローラ\n                        <ul>\n                                <li>バグの例：アレイコントローラXXXで、まれなケースで 0x13 コードを出力し、システムがハングすることがある</li>\n                                <li>バグの例：アレイコントローラXXXで、メモリのエラーによって POST コード 0x13 を出力してコントローラがロックアップする可能性がある</li>\n                        </ul>\n                        </li>\n                        <li>ファイバーチャネル</li>\n                        <li>NIC</li>\n                        <li>システムROM(BIOS、UEFI)\n                        <ul>\n                                <li>バグの例：BIOSXXXで、iLO4 FW vx.xx を使用している場合、SmartStorageBattery が誤検知され、サーバーがハングすることがある</li>\n                                <li>パフォーマンスを重視するような設定に変えられます</li>\n                                <li><strong>ハードを制御できるということは、設定によりハードが問題になることも考えられます。<br />\n                                多くの人が使っているデフォルト設定のままの方がいいのかもしれません。</strong></li>\n                        </ul>\n                        </li>\n                        <li>管理ツール(例 HPE ilo)\n                        <ul>\n                                <li>バグの例：iLO FWvX.XXで、NVDIMM 非搭載構成で SmartStorageBattery 故障時に SMI が過剰に発生し、サーバーがハングすることがある</li>\n                        </ul>\n                        </li>\n                </ul>\n\n                <p>OSを入れ替えても、ファームウェアはかわりません。<br />\n                故障で、ハードウェアを交換するとファームウェアのバージョンも変わります。<br />\n                <strong>ベンダーは、問題があり問い合わせると、ファームウェアが古いことが原因かもしれませんので、ファームウェアを最新にしてくださいと言ってきます。</strong><br />\n                ハード故障といってもファームウェアが引き金になっていることもあります。</p>\n\n                <h2>ドライバーのバグ</h2>\n\n                <p>ドライバーは、OSにあるハードを制御しているプログラムです。<br />\n                故障で、ハードウェアを交換しても、ドライバーのバージョンはかわりません。<br />\n                ドライバーは、ハードベンダーとＯＳベンダーが出しているドライバーがあります。</p>\n\n                <ul>\n                        <li>アレイコントローラ</li>\n                        <li>ファイバーチャネル</li>\n                        <li>NIC\n                        <ul>\n                                <li>運用を開始してしばらくすると、NICドライバーの問題で疎通できなくなることがありました。</li>\n                        </ul>\n                        </li>\n                </ul>\n\n                <h2>OS、ハイパーバイザーのバグ</h2>\n\n                <p>勝手にOS再起動したり、カーネルパニックになったり、ハングしたりもあります。</p>\n\n                <p>どのログにも原因が書かれていなく原因不明となることもあります。<br />\n                もしかしたらOS起動してから日数が経過したことが原因で、<br />\n                １年毎に定期再起動が必要なのではないかという声もありますが、<br />\n                実際は本当かどうかわかりません。</p>\n\n                <h2>サーバ停止原因のまとめ</h2>\n\n                <p><strong>物理的な故障なら、冗長化できているミッションクリティカルサーバにすることによって対応できますが、<br />\n                ファームウェアやドライバーやOSのバグに関しては、<br />\n                ミッションクリティカルサーバにしても発生する可能性があり、問題によってはサーバが停止してしまいます。</strong></p>\n\n                <p>&nbsp;</p>\n\n                <h1>ハードウェアを購入する時に確認したいこと</h1>\n\n                <p>ハードウェアの故障個所と、その原因を整理したことにより、<br />\n                問題となるファームウェア、ドライバーに対してどのように対応できるかが、<br />\n                高可用性サーバの選定基準にするのがいいのではないかと考えます。<br />\n                また、それ以外にもサーバを選定するうえでの判断材料がありますので、まとめたいと思います。</p>\n\n                <p>■高可用性サーバにとって、ファームウェアで重要なこと</p>\n\n                <ul>\n                        <li><strong>サイトで調べる際に、ファームウェアのバグや最新バージョンがわかりやすいか</strong></li>\n                        <li>サーバで使っているファームウェアのバージョン確認方法が楽であること</li>\n                        <li>ファームウェアのバージョンアップ方法\n                        <ul>\n                                <li>Linux OSからファームのバージョンアップできるか？</li>\n                                <li>リモートから一斉にBIOSや色々なファームのバージョンアップできるか？</li>\n                                <li>OSがない状態でのファームのバージョンアップ方法</li>\n                                <li>色々な箇所のバージョンアップが含まれるパッケージがあるか？</li>\n                        </ul>\n                        </li>\n                        <li><strong>ファームウェアの切り戻しがしやすいか。</strong></li>\n                </ul>\n\n                <p>■高可用性サーバにとって、重要なこと</p>\n\n                <ul>\n                        <li>ハードウェアの故障の確認方法\n                        <ul>\n                                <li>概要などでエラーがわかるようになっているか。</li>\n                        </ul>\n                        </li>\n                        <li>ハードウェア故障時にはメールを飛ばせるか。\n                        <ul>\n                                <li>一元管理できるか。</li>\n                                <li><strong>メールが飛ばなかったり、その時にメールを見過ごしても、後からもハード故障が把握できるか</strong></li>\n                        </ul>\n                        </li>\n                        <li>物理的にもLEDによりどこが故障しているかわかるか。</li>\n                        <li>故障しているか確認するためのHW診断ができること\n                        <ul>\n                                <li>診断ツールがあることによって、この診断で問題なかったらそのままいきましょうと言える。</li>\n                        </ul>\n                        </li>\n                        <li>ホットプラグで何を交換可能か（ディスク、FAN、電源など）</li>\n                </ul>\n\n                <p>■その他考慮すること</p>\n\n                <ul>\n                        <li>BIOSの設定方法\n                        <ul>\n                                <li>現在どのようなBIOS設定になっているかが、OS起動後でもわかるか？</li>\n                        </ul>\n                        </li>\n                        <li>100Vか200Vか。高可用性サーバは200Vが多いです。</li>\n                        <li>リモートからのコンソール操作のしやすさ。\n                        <ul>\n                                <li>ISOイメージのマウント方法</li>\n                        </ul>\n                        </li>\n                        <li>密度。（何Ｕに何台入るか？）</li>\n                        <li>ラッキングしやすいか。（ドライバー不要か）</li>\n                </ul>\n\n                <h1>各ベンダーが出しているミッションクリティカルサーバ</h1>\n\n                <p>高可用性サーバを目指す選定基準を整理しましたが、<br />\n                各ベンダーから一般的なx86サーバよりも、より高可用性を目指しているサーバがありますので、<br />\n                どのようなものがあるのか、どのように高可用性を実現しているのかをまとめてみました。</p>\n\n                <h2>IBM Power</h2>\n\n                <p><a href="https://www.ibm.com/systems/jp-ja/power/index.html" rel="nofollow noopener" target="_blank">https://www.ibm.com/systems/jp-ja/power/index.html</a></p>\n\n                <ul>\n                        <li>高速なPOWERプロセッサー搭載。GoogleもPower プロセッサーを採用</li>\n                        <li>2Uサーバの小さなサーバがある</li>\n                        <li>AIX, Red Hat、SUSE、Ubuntu\n                        <ul>\n                                <li>商用OSではない、Ubuntuサポートを打ち出している。</li>\n                        </ul>\n                        </li>\n                        <li>CPUやメモリーが故障してもOS停止しない工夫。</li>\n                        <li>1コアあたり8スレッドまで設定可能\n                        <ul>\n                                <li>1ソケット12コアのマシンであれば、最大で96コアにできる。</li>\n                                <li>スレッド数は、1 or 2 or 4 or 8 で、アプリケーションにあった最適なスレッド数を変更可能</li>\n                        </ul>\n                        </li>\n                </ul>\n\n                <p>■気になること</p>\n\n                <ul>\n                        <li>Power CPUのため、Power CPU用のOS、アプリを入れる必要がある。</li>\n                        <li>Power CPUのため、商用ミドルウェアが動かないこと、保証対象外になることがある。</li>\n                </ul>\n\n                <p><a href="https://qiita-image-store.s3.amazonaws.com/0/156368/38501976-533f-4819-ff34-7917d8765ced.png" rel="nofollow noopener" target="_blank"><img alt="Power.png" src="https://qiita-image-store.s3.amazonaws.com/0/156368/38501976-533f-4819-ff34-7917d8765ced.png" /></a></p>\n\n                <h2>HPE Superdome X</h2>\n\n                <p><a href="https://www.hpe.com/jp/ja/servers/superdome.html" rel="nofollow noopener" target="_blank">https://www.hpe.com/jp/ja/servers/superdome.html</a></p>\n\n                <ul>\n                        <li>シングルシステムで99.999%の高可用性が得られます</li>\n                        <li>他のx86プラットフォームと比較して、20倍優れた信頼性を備え、ダウンタイムを60%低減</li>\n                        <li>クリティカルなLinuxおよびWindowsのワークロードに最適なプラットフォーム</li>\n                        <li>Linux、Windows、およびVMware</li>\n                        <li>OS と連携したメモリや CPU コアの復旧や I/O エラーの封じ込めを実現。復旧が困難と判断した場合には故障したコンポーネント（ CPU ／メモリ／ブレード）を自動で切り離すこともできます</li>\n                </ul>\n\n                <p>■気になること</p>\n\n                <ul>\n                        <li>エンクロージャー型で導入コストが大きい。</li>\n                        <li>リプレースの時にもエンクロージャーを購入する必要がある。</li>\n                </ul>\n\n                <p><a href="https://qiita-image-store.s3.amazonaws.com/0/156368/f66fb200-8889-b36e-ca02-9a1d8b9c3b60.png" rel="nofollow noopener" target="_blank"><img alt="SuperdomeX.png" src="https://qiita-image-store.s3.amazonaws.com/0/156368/f66fb200-8889-b36e-ca02-9a1d8b9c3b60.png" /></a></p>\n\n                <h2>Fujitsu PRIMEQUEST</h2>\n\n                <p><a href="http://www.fujitsu.com/jp/products/computing/servers/primequest/" rel="nofollow noopener" target="_blank">http://www.fujitsu.com/jp/products/computing/servers/primequest/</a></p>\n\n                <blockquote>\n                <p>インテル Xeonプロセッサーをはじめ、 Windows Server、Linux といった業界標準のオープン・アーキテクチャーをベースに、 富士通がメインフレームで培ったノウハウ、テクノロジーを結集したオープン・ミッションクリティカルサーバ</p>\n                </blockquote>\n\n                <ul>\n                        <li>Linux/Windows対応</li>\n                        <li>内部コンポーネントを徹底的に冗長化</li>\n                        <li>ソフトウェア側の配慮を必要としないハードウェアによる高可用テクノロジー</li>\n                        <li>最長10年の長期保守が可能です。</li>\n                </ul>\n\n                <p><a href="https://qiita-image-store.s3.amazonaws.com/0/156368/7e053b5d-03f9-950d-4d36-32cd8f4cad66.png" rel="nofollow noopener" target="_blank"><img alt="PRIMEQUEST.png" src="https://qiita-image-store.s3.amazonaws.com/0/156368/7e053b5d-03f9-950d-4d36-32cd8f4cad66.png" /></a></p>\n\n                <h2>Strutas FT Server</h2>\n\n                <p><a href="https://www.stratus.co.jp/products/ftserver/" rel="nofollow noopener" target="_blank">https://www.stratus.co.jp/products/ftserver/</a></p>\n\n                <blockquote>\n                <p>ストラタステクノロジーが30年以上にわたり培ってきた独自のアーキテクチャによる連続可用性技術が、ダウンタイムによる高額な損失コストの発生を回避し、お客様に「無停止の安心」をお届けします。</p>\n                </blockquote>\n\n                <ul>\n                        <li>ストラタスのftServerのコンポーネント（CPU、メモリ、チップセット、ディスク、PCI、電源、ファン等）は全てハードウェアレベルで冗長化</li>\n                        <li>各種デバイスドライバを一から検証し、強化</li>\n                        <li>Windows／Red Hat／VMware 搭載の無停止型IAサーバ</li>\n                </ul>\n\n                <p><a href="https://qiita-image-store.s3.amazonaws.com/0/156368/c3b63aa3-f597-5227-18cb-122e9cfc29df.png" rel="nofollow noopener" target="_blank"><img alt="日本ストラタステクノロジー.png" src="https://qiita-image-store.s3.amazonaws.com/0/156368/c3b63aa3-f597-5227-18cb-122e9cfc29df.png" /></a></p>\n\n                <p><a href="https://qiita-image-store.s3.amazonaws.com/0/156368/da175e49-299e-e224-43ac-275d1349a6ea.png" rel="nofollow noopener" target="_blank"><img src="https://qiita-image-store.s3.amazonaws.com/0/156368/da175e49-299e-e224-43ac-275d1349a6ea.png" style="width:250px" /></a></p>\n\n                <h2>NEC ftサーバ Express5800</h2>\n\n                <p><a href="http://jpn.nec.com/pcserver/ft/lineup.html" rel="nofollow noopener" target="_blank">http://jpn.nec.com/pcserver/ft/lineup.html</a></p>\n\n                <ul>\n                        <li>- Linux、Windows、VMware</li>\n                        <li>システム停止につながる障害の原因となりやすいサーバのハードウェアを二重化して格納</li>\n                        <li>二重化したモジュール全体でホットスワップを実現しているため、障害の発生した部品を交換する際もシステムの停止や再起動は不要。</li>\n                </ul>\n\n                <p><a href="https://qiita-image-store.s3.amazonaws.com/0/156368/cda1aa53-acb5-fb2a-b234-9aa7b52ff0df.png" rel="nofollow noopener" target="_blank"><img src="https://qiita-image-store.s3.amazonaws.com/0/156368/cda1aa53-acb5-fb2a-b234-9aa7b52ff0df.png" style="width:250px" /></a></p>\n\n                <h2>ミッションクリティカルサーバの特徴まとめ</h2>\n\n                <ul>\n                        <li>ハードウェアの二重化</li>\n                        <li>長年の同じ仕組みを使うことによるファームウェア、ドライバーの信頼性\n                        <ul>\n                                <li>長年無停止で使われてきたメインフレームなどの技術を採用</li>\n                        </ul>\n                        </li>\n                        <li>ハードウェアに問題がある場合、ダンプ機能がしっかりしており、原因の特定が可能</li>\n                </ul>\n\n                <h1>ダウンタイム</h1>\n\n                <p>ダウンタイムと表現する時、一般的には、「計画外ダウンタイム」になります。<br />\n                メンテナンスを除いたサーバが動いている時間に対して、<br />\n                計画外ダウンタイムをどのくらいにするかということです。<br />\n                99.999%なら、計画外ダウンタイムが5.25分に抑えられることになります。</p>\n\n                <p>私の考え方ですが、高額な高可用性サーバなら、故障なしで、ダウンタイム0秒を期待してしまいます。<br />\n                ダウンしたサーバを早く復旧させるのは、高可用性サーバの特徴ではなく、クラスターソフトなどの役割です。<br />\n                一度ダウンしてしまったサーバをOS再起動して、復旧すればそれでいいのかといったら、そんなことは期待していないです。</p>\n\n                <p>この数値が大きければサーバが壊れにくいという目安ぐらいにとらえたいと思います。</p>\n                ', '忙しいからどうしよう', '315', '杉田 啓寿', '2017-07-17 15:08:00', '2017-07-19 08:08:56', '2017-07-19 11:46:47'),
(38, 1015, '<h1>まずは</h1>\n\n                <h1>&nbsp;</h1>\n\n                <p>自分が健康になって見本をみせようよ。</p>\n\n                <p>&nbsp;</p>\n                ', 'みんなへ広めたい\n                みんなへ知ってもらいたい\n                ', '315', '杉田 啓寿', '2017-07-14 18:25:00', '2017-07-19 11:25:58', '2017-07-27 06:04:58'),
(39, 1016, '<p>・3年後30億達成に向けて</p>\n\n                <p>　なにかなんでも3年後に30億達成しましょう！</p>\n\n                <p>&nbsp;</p>\n\n                <p>・給与査定</p>\n\n                <p>　2017年9月度給与査定<br />\n                  <span style="color:#e74c3c">今後の利益により変動します</span></p>\n                ', '・3年後30億達成に向けて\n                ・給与査定', '315', '杉田 啓寿', '2017-07-27 13:58:00', '2017-07-27 05:01:47', '2017-07-27 05:01:47'),
(40, 1016, '<p>今日は</p>\n\n                <p>&nbsp;</p>\n\n                <p>元気です</p>\n                ', '', '2', '進藤', '2017-07-14 21:05:00', '2017-07-27 14:05:52', '2017-07-27 14:05:52');
INSERT INTO `minutes_details` (`minutes_detail_id`, `minutes_group_id`, `minutes_detail_text`, `minutes_detail_agenda`, `user_id`, `minutes_detail_user_name`, `minutes_detail_date`, `created_at`, `updated_at`) VALUES
(41, 1016, '<p><u><strong>■パスログ修正内容</strong></u><br />\r\n<s>・年別利益表の修正</s><br />\r\n<s>・社員詳細の登録日時を入社日に変更<br />\r\n・給与編集用画面から基本情報ページへいくと自分のページにいってしまう<br />\r\n・Pas logへ変更</s><br />\r\n・権限の閲覧があっても権限リストが見れない</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■委員会について</strong></u><br />\r\nそれぞれの部署で2名選出。月1開催（どちらか1人が出席）<br />\r\n1月中に選出</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■総会での話のまとめ</strong></u><br />\r\n共有（信頼）<br />\r\n見極め（挑戦）<br />\r\n実行</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■今後の昇給・賞与について</strong></u><br />\r\n50が会社に残す<br />\r\n20が昇給<br />\r\n30が賞与</p>\r\n\r\n\r\n<p><u><strong>■パスログ修正内容</strong></u><br />\r\n<s>・年別利益表の修正</s><br />\r\n<s>・社員詳細の登録日時を入社日に変更<br />\r\n・給与編集用画面から基本情報ページへいくと自分のページにいってしまう<br />\r\n・Pas logへ変更</s><br />\r\n・権限の閲覧があっても権限リストが見れない</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■委員会について</strong></u><br />\r\nそれぞれの部署で2名選出。月1開催（どちらか1人が出席）<br />\r\n1月中に選出</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■総会での話のまとめ</strong></u><br />\r\n共有（信頼）<br />\r\n見極め（挑戦）<br />\r\n実行</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■今後の昇給・賞与について</strong></u><br />\r\n50が会社に残す<br />\r\n20が昇給<br />\r\n30が賞与</p>\r\n\r\n<p><u><strong>■パスログ修正内容</strong></u><br />\r\n<s>・年別利益表の修正</s><br />\r\n<s>・社員詳細の登録日時を入社日に変更<br />\r\n・給与編集用画面から基本情報ページへいくと自分のページにいってしまう<br />\r\n・Pas logへ変更</s><br />\r\n・権限の閲覧があっても権限リストが見れない</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■委員会について</strong></u><br />\r\nそれぞれの部署で2名選出。月1開催（どちらか1人が出席）<br />\r\n1月中に選出</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■総会での話のまとめ</strong></u><br />\r\n共有（信頼）<br />\r\n見極め（挑戦）<br />\r\n実行</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■今後の昇給・賞与について</strong></u><br />\r\n50が会社に残す<br />\r\n20が昇給<br />\r\n30が賞与</p>\r\n<p><u><strong>■パスログ修正内容</strong></u><br />\r\n<s>・年別利益表の修正</s><br />\r\n<s>・社員詳細の登録日時を入社日に変更<br />\r\n・給与編集用画面から基本情報ページへいくと自分のページにいってしまう<br />\r\n・Pas logへ変更</s><br />\r\n・権限の閲覧があっても権限リストが見れない</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■委員会について</strong></u><br />\r\nそれぞれの部署で2名選出。月1開催（どちらか1人が出席）<br />\r\n1月中に選出</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■総会での話のまとめ</strong></u><br />\r\n共有（信頼）<br />\r\n見極め（挑戦）<br />\r\n実行</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■今後の昇給・賞与について</strong></u><br />\r\n50が会社に残す<br />\r\n20が昇給<br />\r\n30が賞与</p>\r\n\r\n<p><u><strong>■パスログ修正内容</strong></u><br />\r\n<s>・年別利益表の修正</s><br />\r\n<s>・社員詳細の登録日時を入社日に変更<br />\r\n・給与編集用画面から基本情報ページへいくと自分のページにいってしまう<br />\r\n・Pas logへ変更</s><br />\r\n・権限の閲覧があっても権限リストが見れない</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■委員会について</strong></u><br />\r\nそれぞれの部署で2名選出。月1開催（どちらか1人が出席）<br />\r\n1月中に選出</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■総会での話のまとめ</strong></u><br />\r\n共有（信頼）<br />\r\n見極め（挑戦）<br />\r\n実行</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■今後の昇給・賞与について</strong></u><br />\r\n50が会社に残す<br />\r\n20が昇給<br />\r\n30が賞与</p>\r\n<p><u><strong>■パスログ修正内容</strong></u><br />\r\n<s>・年別利益表の修正</s><br />\r\n<s>・社員詳細の登録日時を入社日に変更<br />\r\n・給与編集用画面から基本情報ページへいくと自分のページにいってしまう<br />\r\n・Pas logへ変更</s><br />\r\n・権限の閲覧があっても権限リストが見れない</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■委員会について</strong></u><br />\r\nそれぞれの部署で2名選出。月1開催（どちらか1人が出席）<br />\r\n1月中に選出</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■総会での話のまとめ</strong></u><br />\r\n共有（信頼）<br />\r\n見極め（挑戦）<br />\r\n実行</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■今後の昇給・賞与について</strong></u><br />\r\n50が会社に残す<br />\r\n20が昇給<br />\r\n30が賞与</p>\r\n<p><u><strong>■パスログ修正内容</strong></u><br />\r\n<s>・年別利益表の修正</s><br />\r\n<s>・社員詳細の登録日時を入社日に変更<br />\r\n・給与編集用画面から基本情報ページへいくと自分のページにいってしまう<br />\r\n・Pas logへ変更</s><br />\r\n・権限の閲覧があっても権限リストが見れない</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■委員会について</strong></u><br />\r\nそれぞれの部署で2名選出。月1開催（どちらか1人が出席）<br />\r\n1月中に選出</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■総会での話のまとめ</strong></u><br />\r\n共有（信頼）<br />\r\n見極め（挑戦）<br />\r\n実行</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■今後の昇給・賞与について</strong></u><br />\r\n50が会社に残す<br />\r\n20が昇給<br />\r\n30が賞与</p>\r\n<p><u><strong>■パスログ修正内容</strong></u><br />\r\n<s>・年別利益表の修正</s><br />\r\n<s>・社員詳細の登録日時を入社日に変更<br />\r\n・給与編集用画面から基本情報ページへいくと自分のページにいってしまう<br />\r\n・Pas logへ変更</s><br />\r\n・権限の閲覧があっても権限リストが見れない</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■委員会について</strong></u><br />\r\nそれぞれの部署で2名選出。月1開催（どちらか1人が出席）<br />\r\n1月中に選出</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■総会での話のまとめ</strong></u><br />\r\n共有（信頼）<br />\r\n見極め（挑戦）<br />\r\n実行</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong>■今後の昇給・賞与について</strong></u><br />\r\n50が会社に残す<br />\r\n20が昇給<br />\r\n30が賞与</p>\r\n', '', '2', '進藤 ', '2018-02-23 15:42:00', '2018-02-23 15:43:42', '2018-02-23 15:43:42'),
(42, 1016, '<p>fasdfads</p>\r\n', '', '2', '進藤 ', '2018-02-28 15:44:00', '2018-02-23 15:44:20', '2018-02-23 15:44:53'),
(43, 1014, '<p>fdasfads</p>\r\n', 'fdsa', '2', '進藤 ', '2018-07-19 20:17:00', '2018-07-19 20:21:26', '2018-07-19 20:21:26'),
(44, 1014, '<p>fadsas</p>\r\n', 'fdas', '2', '進藤 ', '2018-07-19 20:22:00', '2018-07-19 20:26:44', '2018-07-19 20:26:44'),
(45, 1014, '<p>aaaa</p>\r\n', 'ddd', '2', '進藤 ', '2018-07-19 20:26:00', '2018-07-19 20:27:02', '2018-07-19 20:27:02'),
(46, 1014, '<p>いいいい</p>\r\n', 'あああ', '2', '進藤 ', '2018-07-19 20:36:00', '2018-07-19 20:37:13', '2018-07-19 20:37:13'),
(47, 1014, '<p>fdsafdsa</p>\r\n', 'fdsa', '2', '進藤 ', '2018-07-19 20:44:00', '2018-07-19 20:45:06', '2018-07-19 20:45:06'),
(48, 1014, '<p>a</p>\r\n', 'fa', '2', '進藤 ', '2018-07-19 20:46:00', '2018-07-19 20:46:53', '2018-07-19 20:46:53'),
(49, 1014, '<p>fasdfasd</p>\r\n', 'fsadf', '2', '進藤 ', '2018-07-19 20:52:00', '2018-07-19 20:52:47', '2018-07-19 20:52:47'),
(50, 1014, '<p>f</p>\r\n', 'g', '2', '進藤 ', '2018-07-19 20:53:00', '2018-07-19 20:53:24', '2018-07-19 20:53:24'),
(51, 1014, '<p>fdas</p>\r\n', 'fsad', '2', '進藤 ', '2018-07-19 20:54:00', '2018-07-19 20:54:27', '2018-07-19 20:54:27'),
(52, 1014, '<p>b</p>\r\n', 'a', '2', '進藤 ', '2018-07-19 20:55:00', '2018-07-19 20:55:10', '2018-07-19 20:55:10'),
(53, 1014, '<p>v</p>\r\n', 'f', '2', '進藤 ', '2018-07-19 20:55:00', '2018-07-19 20:55:22', '2018-07-19 20:55:22'),
(54, 1014, '<p>fff</p>\r\n', 'aa', '2', '進藤 ', '2018-07-19 20:55:00', '2018-07-19 20:55:36', '2018-07-19 20:55:36'),
(55, 1014, '<p>asd</p>\r\n', 'fdasf', '2', '進藤 ', '2018-07-19 21:46:00', '2018-07-19 21:46:42', '2018-07-19 21:46:42'),
(56, 1014, '<p>fda</p>\r\n', 'fdas', '1', '井上 ', '2018-07-12 21:47:00', '2018-07-19 21:48:07', '2018-07-19 21:48:07'),
(57, 1014, '<p>fdsa</p>\r\n', 'dsa', '2', '進藤 ', '2018-07-19 21:51:00', '2018-07-19 21:51:05', '2018-07-19 21:51:05'),
(58, 1014, '<p>fdas</p>\r\n', 'fdsa', '1', '井上 ', '2018-07-19 21:52:00', '2018-07-19 21:52:48', '2018-07-19 21:52:48'),
(59, 1014, '<p>d</p>\r\n', 'ds', '1', '井上 ', '2018-07-20 21:53:00', '2018-07-19 21:53:41', '2018-07-19 21:53:41'),
(60, 1014, '<p>dfs</p>\r\n', 'fds', '1', '井上 ', '2018-07-26 21:56:00', '2018-07-19 21:56:55', '2018-07-19 21:56:55'),
(61, 1014, '<p>d</p>\r\n', 'd', '1', '井上 ', '2018-07-19 21:57:00', '2018-07-19 21:57:42', '2018-07-19 21:57:42'),
(62, 1014, '<p>d</p>\r\n', 'd', '1', '井上 ', '2018-07-20 22:05:00', '2018-07-19 22:05:18', '2018-07-19 22:05:18'),
(63, 1014, '<p>e</p>\r\n', 'e', '1', '井上 ', '2018-07-20 23:39:00', '2018-07-19 23:39:22', '2018-07-19 23:39:22'),
(64, 1014, '<p>e</p>\r\n', 'd', '1', '井上 ', '2018-07-28 23:40:00', '2018-07-19 23:40:17', '2018-07-19 23:40:17'),
(65, 1014, '<p>d</p>\r\n', 'ff', '1', '井上 ', '2018-07-28 23:40:00', '2018-07-19 23:40:44', '2018-07-19 23:40:44'),
(66, 1014, '<p>f</p>\r\n', 'f', '3', '山崎 ', '2018-07-21 09:26:00', '2018-07-20 09:26:43', '2018-07-20 09:26:43'),
(67, 1014, '<p>f</p>\r\n', 'a', '3', '山崎 ', '2018-07-21 09:27:00', '2018-07-20 09:27:14', '2018-07-20 09:27:14'),
(68, 1014, '<p>d</p>\r\n', 'd', '3', '山崎 ', '2018-07-14 09:27:00', '2018-07-20 09:27:30', '2018-07-20 09:27:30'),
(69, 1014, '<p>d</p>\r\n', 'd', '3', '山崎 ', '2018-07-21 09:28:00', '2018-07-20 09:28:51', '2018-07-20 09:28:51'),
(70, 1014, '<p>ad</p>\r\n', 'da', '3', '山崎 ', '2018-07-20 09:29:00', '2018-07-20 09:29:54', '2018-07-20 09:29:54'),
(71, 1014, '<p>d</p>\r\n', 'd', '3', '山崎 ', '2018-07-21 09:32:00', '2018-07-20 09:32:41', '2018-07-20 09:32:41'),
(72, 1014, '<p>d</p>\r\n', 'd', '1', '井上 ', '2018-07-20 09:44:00', '2018-07-20 09:44:13', '2018-07-20 09:44:13'),
(73, 1014, '<p>d</p>\r\n', '', '1', '井上 ', '2018-07-13 09:45:00', '2018-07-20 09:45:13', '2018-07-20 09:45:13'),
(74, 1014, '<p>d</p>\r\n', '', '1', '井上 ', '2018-07-13 09:53:00', '2018-07-20 09:53:58', '2018-07-20 09:53:58'),
(75, 1014, '<p>d</p>\r\n', '', '1', '井上 ', '2018-07-14 09:54:00', '2018-07-20 09:54:21', '2018-07-20 09:54:21'),
(76, 1014, '<p>daf</p>\r\n', 'fdas', '2', '進藤 ', '2018-07-20 09:54:00', '2018-07-20 09:54:43', '2018-07-20 09:54:43'),
(77, 1014, '<p>d</p>\r\n', 'd', '2', '進藤 ', '2018-07-20 09:55:00', '2018-07-20 09:55:36', '2018-07-20 09:55:36'),
(78, 1014, '<p>d</p>\r\n', '', '2', '進藤 ', '2018-07-31 09:55:00', '2018-07-20 09:55:48', '2018-07-20 09:55:48'),
(79, 1014, '<p>fda</p>\r\n', 'fda', '2', '進藤 ', '2018-07-20 10:18:00', '2018-07-20 10:18:13', '2018-07-20 10:18:13'),
(80, 1014, '<p>fads</p>\r\n', 'fda', '1', '井上 ', '2018-07-20 10:18:00', '2018-07-20 10:18:48', '2018-07-20 10:18:48'),
(81, 1014, '<p>dfs</p>\r\n', '', '2', '進藤 ', '2018-07-20 10:19:00', '2018-07-20 10:19:07', '2018-07-20 10:19:07'),
(82, 1014, '<p>fdsa</p>\r\n', 'gfdas', '2', '進藤 ', '2018-07-20 11:27:00', '2018-07-20 11:27:30', '2018-07-20 11:27:30'),
(83, 1014, '<p>fdsa</p>\r\n', 'sda', '1', '井上 ', '2018-07-07 11:27:00', '2018-07-20 11:27:47', '2018-07-20 11:27:47'),
(88, 1014, '<p>fsdふぁ</p>\r\n', '', '2', '進藤 ', '2018-07-20 12:09:00', '2018-07-20 12:09:43', '2018-07-20 12:09:43'),
(89, 1014, '<p>fdas</p>\r\n', 'fdsa', '2', '進藤 ', '2018-07-20 13:00:00', '2018-07-20 13:00:54', '2018-07-20 13:00:54'),
(90, 1014, '<p>fdas</p>\r\n', 'fdsa', '2', '進藤 ', '2018-07-20 13:16:00', '2018-07-20 13:16:30', '2018-07-20 13:16:30'),
(91, 1022, '<p>テスト</p>\r\n', 'テスト', '2', '進藤 ', '2018-07-21 13:56:00', '2018-07-20 13:56:51', '2018-07-20 13:56:51'),
(92, 1022, '<p>あ</p>\r\n', 'あ', '2', '進藤 ', '2018-07-20 13:58:00', '2018-07-20 13:58:13', '2018-07-20 13:58:13'),
(93, 1014, '<p>fdas</p>\r\n', 'fdas', '1', '井上 ', '2018-07-27 15:10:00', '2018-07-25 15:10:44', '2018-07-25 15:10:44'),
(94, 1023, '<p>fdas</p>\r\n', 'fdsa', '1', '井上 ', '2018-07-26 15:12:00', '2018-07-25 15:12:32', '2018-07-25 15:12:32'),
(95, 1014, '<p>d</p>\r\n', 'dad', '2', '進藤 ', '2018-07-26 15:44:00', '2018-07-25 15:44:47', '2018-07-25 15:44:47'),
(98, 1014, '<p>fdasfdas</p>\r\n', '', '1', '井上 ', '2018-07-27 16:23:00', '2018-07-25 16:23:53', '2018-07-25 16:23:53'),
(99, 1014, '<p>fdsa</p>\r\n', 'fdsa', '1', '井上 ', '2018-07-27 19:18:00', '2018-07-26 19:18:25', '2018-07-26 19:18:25'),
(100, 1014, '<p>fdsa</p>\r\n', 'fa', '3', '山崎 ', '2018-08-03 11:48:00', '2018-07-30 11:48:43', '2018-07-30 11:48:43'),
(101, 1014, '<p>dfsa</p>\r\n', 'fdsa', '3', '山崎 ', '2018-08-01 11:49:00', '2018-07-30 11:49:04', '2018-07-30 11:49:04'),
(102, 1014, '<p>d</p>\r\n', 'dasd', '2', '進藤 ', '2018-08-10 18:50:00', '2018-08-09 18:50:30', '2018-08-09 18:50:30'),
(103, 1029, '<p>testtesttest</p>\r\n', 'test', '323', 'Phuc ', '2018-08-17 08:41:00', '2018-08-17 10:41:54', '2018-08-17 10:41:54'),
(104, 1030, '<p>ahihiahihi</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="/images/minute/images/images.jpg" style="height:225px; width:225px" /></p>\r\n', 'ahihi', '323', 'Phuc ', '2018-08-17 08:46:00', '2018-08-17 10:46:24', '2018-08-20 11:09:50'),
(105, 1029, '<p>aaaa</p>\r\n', 'aaaa', '323', 'Phuc ', '2018-08-17 08:57:00', '2018-08-17 10:57:54', '2018-08-17 10:57:54'),
(107, 1030, '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="/images/minute/images/images%20%282%29.jpg" style="height:224px; width:224px" /></p>\r\n', '', '323', 'Phuc ', '2018-08-20 09:10:00', '2018-08-20 11:10:25', '2018-08-20 11:10:25'),
(108, 1014, '<p>あああ</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="/images/minute/images/pixta_26741185_M%20%281%29.jpg" style="height:400px; width:600px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>いい</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ううううう<img alt="" src="/images/minute/images/4803d_0000785114_1-670x443%281%29.jpg" style="height:443px; width:670px" /></p>\r\n', '', '2', '進藤 ', '2018-08-20 12:19:00', '2018-08-20 12:21:48', '2018-08-20 12:24:34'),
(109, 1014, '<p>あああ</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="/images/minute/images/pixta_26741185_M%20%281%29.jpg" style="height:334px; width:500px" /></p>\r\n', '', '2', '進藤 ', '2018-08-25 14:44:00', '2018-08-20 14:44:53', '2018-08-20 14:44:53'),
(110, 1029, '<p>aaaa</p>\r\n\r\n<p><img alt="" src="/images/minute/images/5b7ce9dd04a06.jpg" style="height:225px; width:225px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'aaa', '323', 'Phuc ', '2018-08-22 11:42:00', '2018-08-22 13:43:22', '2018-08-22 13:43:22'),
(111, 1014, '<p>ppp</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="/images/minute/images/5b7d001cdf4d0.jpg" style="height:33px; width:50px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="/images/minute/images/5b7d036679249.jpg" style="height:334px; width:500px" /></p>\r\n', '', '2', '進藤 ', '2018-08-23 15:17:00', '2018-08-22 15:18:37', '2018-08-22 15:32:56'),
(112, 1014, '<p>a</p>\r\n', 'a', '3', '山崎 ', '2018-09-08 10:23:00', '2018-09-07 10:23:19', '2018-09-07 10:23:19');

-- --------------------------------------------------------

--
-- テーブルの構造 `minutes_groups`
--

CREATE TABLE IF NOT EXISTS `minutes_groups` (
`minutes_group_id` int(10) unsigned NOT NULL,
  `minutes_group_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `minutes_group_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `detail_updated_at` datetime NOT NULL COMMENT '議事録の最新更新日付',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='議事録グループ管理' AUTO_INCREMENT=1031 ;

--
-- テーブルのデータのダンプ `minutes_groups`
--

INSERT INTO `minutes_groups` (`minutes_group_id`, `minutes_group_name`, `minutes_group_desc`, `deleted_at`, `detail_updated_at`, `created_at`, `updated_at`) VALUES
(5, 'なかよし', 'これは\n                なかよしグループです。', NULL, '0000-00-00 00:00:00', '2017-06-28 22:17:17', '2017-06-28 22:17:17'),
(6, 'システム課用', 'システム課専用\n                グループ', NULL, '0000-00-00 00:00:00', '2017-06-28 22:17:55', '2017-07-13 18:18:48'),
(7, 'なんでもない', 'なんでもない\n                そんな感じ', NULL, '0000-00-00 00:00:00', '2017-06-28 22:21:38', '2017-06-28 22:21:38'),
(8, 'Try18担当者', '担当者ミテーィング', NULL, '0000-00-00 00:00:00', '2017-06-28 22:22:43', '2017-06-28 22:22:43'),
(9, 'ベトナムチャット', 'ベトナム人だけ', NULL, '0000-00-00 00:00:00', '2017-06-28 22:50:26', '2017-06-28 22:50:26'),
(11, '自分が入ってる', 'そんな\n                グループ', NULL, '0000-00-00 00:00:00', '2017-06-29 21:02:16', '2017-06-29 21:02:16'),
(912, 'テスト0', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(913, 'テスト1', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(914, 'テスト2', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(915, 'テスト3', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(916, 'テスト4', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(917, 'テスト5', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(918, 'テスト6', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(919, 'テスト7', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(920, 'テスト8', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(921, 'テスト9', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(922, 'テスト10', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(923, 'テスト11', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(924, 'テスト12', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(925, 'テスト13', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(926, 'テスト14', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(927, 'テスト15', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(928, 'テスト16', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(929, 'テスト17', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(930, 'テスト18', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(931, 'テスト19', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(932, 'テスト20', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(933, 'テスト21', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(934, 'テスト22', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(935, 'テスト23', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(936, 'テスト24', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(937, 'テスト25', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(938, 'テスト26', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(939, 'テスト27', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(940, 'テスト28', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(941, 'テスト29', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(942, 'テスト30', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(943, 'テスト31', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(944, 'テスト32', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(945, 'テスト33', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(946, 'テスト34', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(947, 'テスト35', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(948, 'テスト36', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(949, 'テスト37', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(950, 'テスト38', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(951, 'テスト39', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(952, 'テスト40', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(953, 'テスト41', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(954, 'テスト42', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(955, 'テスト43', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(956, 'テスト44', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(957, 'テスト45', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(958, 'テスト46', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(959, 'テスト47', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(960, 'テスト48', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(961, 'テスト49', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(962, 'テスト50', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(963, 'テスト51', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(964, 'テスト52', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(965, 'テスト53', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(966, 'テスト54', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(967, 'テスト55', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(968, 'テスト56', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(969, 'テスト57', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(970, 'テスト58', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(971, 'テスト59', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(972, 'テスト60', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(973, 'テスト61', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(974, 'テスト62', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(975, 'テスト63', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(976, 'テスト64', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(977, 'テスト65', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(978, 'テスト66', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(979, 'テスト67', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(980, 'テスト68', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(981, 'テスト69', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(982, 'テスト70', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(983, 'テスト71', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(984, 'テスト72', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(985, 'テスト73', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(986, 'テスト74', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(987, 'テスト75', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(988, 'テスト76', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(989, 'テスト77', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(990, 'テスト78', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(991, 'テスト79', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(992, 'テスト80', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(993, 'テスト81', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(994, 'テスト82', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(995, 'テスト83', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(996, 'テスト84', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(997, 'テスト85', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(998, 'テスト86', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(999, 'テスト87', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1000, 'テスト88', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1001, 'テスト89', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1002, 'テスト90', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1003, 'テスト91', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1004, 'テスト92', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1005, 'テスト93', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1006, 'テスト94', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1007, 'テスト95', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1008, 'テスト96', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1009, 'テスト97', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1010, 'テスト98', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1011, 'テスト99', 'テスト用グループです。', NULL, '0000-00-00 00:00:00', '2017-06-29 21:51:17', '0000-00-00 00:00:00'),
(1012, 'DAYS担当者MTG', 'DAYS', NULL, '0000-00-00 00:00:00', '2017-06-30 01:03:59', '2017-07-18 18:33:54'),
(1013, '社員旅行計画', '社員旅行に向けて', NULL, '0000-00-00 00:00:00', '2017-07-02 15:57:51', '2017-07-02 15:57:51'),
(1014, 'システム開発部MTG', 'システム開発部で使うやつ', NULL, '2018-09-07 10:23:19', '2017-07-11 19:26:46', '2018-09-07 01:23:19'),
(1015, '健康意識向上会', 'メンズエステや健康食品について語らう', NULL, '2017-07-27 06:04:58', '2017-07-13 17:21:44', '2017-07-26 21:04:58'),
(1016, '月例MTG', '月例用グループ', NULL, '2018-02-23 15:44:53', '2017-07-13 22:51:45', '2018-02-23 06:44:53'),
(1017, 'おしゃれぶ', 'おしゃれの話をする', NULL, '0000-00-00 00:00:00', '2017-07-13 22:53:57', '2017-07-13 22:53:57'),
(1018, '経理', '経理ようグルーウ', NULL, '2017-07-19 11:46:47', '2017-07-13 22:55:41', '2017-07-19 02:46:47'),
(1019, '静岡メンバー', '静岡人だけ', NULL, '0000-00-00 00:00:00', '2017-07-13 23:05:18', '2017-07-13 23:05:18'),
(1020, '静岡メンバー', '静岡人だけ', NULL, '0000-00-00 00:00:00', '2017-07-13 23:05:43', '2017-07-13 23:05:43'),
(1021, '個別面談', '個別面談', NULL, '0000-00-00 00:00:00', '2017-07-19 19:11:49', '2017-07-19 19:11:49'),
(1022, 'push通知テスト', 'push通知テスト', NULL, '2018-07-20 13:58:13', '2018-07-20 04:53:48', '2018-07-20 04:58:13'),
(1023, 'test', 'test', '2018-07-25 06:14:15', '2018-07-25 15:12:32', '2018-07-25 06:12:19', '2018-07-25 06:14:15'),
(1024, 'test', 'test', '2018-07-25 06:36:13', '0000-00-00 00:00:00', '2018-07-25 06:35:29', '2018-07-25 06:36:13'),
(1025, 'test', 'test', NULL, '0000-00-00 00:00:00', '2018-07-25 06:38:48', '2018-07-25 06:38:48'),
(1026, 'aa', 'aaa', NULL, '0000-00-00 00:00:00', '2018-07-25 06:46:44', '2018-07-25 06:46:44'),
(1027, 'asdf', 'sdfa', NULL, '0000-00-00 00:00:00', '2018-07-25 06:47:58', '2018-07-25 06:47:58'),
(1028, 'fa', 'fdas', NULL, '0000-00-00 00:00:00', '2018-07-25 06:48:16', '2018-07-25 06:48:16'),
(1029, 'テスト', 'テストテストテスト', NULL, '2018-08-22 13:43:22', '2018-08-17 01:32:08', '2018-08-22 04:43:22'),
(1030, 'test_123', 'testtesttest', NULL, '2018-08-20 11:10:25', '2018-08-17 01:46:07', '2018-08-20 02:10:25');

-- --------------------------------------------------------

--
-- テーブルの構造 `minutes_users`
--

CREATE TABLE IF NOT EXISTS `minutes_users` (
  `minutes_group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `minutes_users`
--

INSERT INTO `minutes_users` (`minutes_group_id`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 4, '2017-06-29 07:17:17', '2017-06-29 07:17:17'),
(5, 6, '2017-06-29 07:17:17', '2017-06-29 07:17:17'),
(5, 7, '2017-06-29 07:17:17', '2017-06-29 07:17:17'),
(5, 8, '2017-06-29 07:17:17', '2017-06-29 07:17:17'),
(6, 1, '2017-06-29 07:17:55', '2017-06-29 07:17:55'),
(6, 2, '2017-06-29 07:17:55', '2017-06-29 07:17:55'),
(6, 3, '2017-06-29 07:17:55', '2017-06-29 07:17:55'),
(7, 158, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 160, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 161, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 163, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 166, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 167, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 168, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 169, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 173, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 183, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 189, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 190, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 191, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 193, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 203, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 213, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 217, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 218, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 219, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 220, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 221, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 222, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 223, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 224, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 225, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 226, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 233, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 243, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 253, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 263, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 273, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 283, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 293, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(7, 303, '2017-06-29 07:21:38', '2017-06-29 07:21:38'),
(8, 1, '2017-06-29 07:22:43', '2017-06-29 07:22:43'),
(8, 4, '2017-06-29 07:22:43', '2017-06-29 07:22:43'),
(8, 7, '2017-06-29 07:22:43', '2017-06-29 07:22:43'),
(8, 316, '2017-06-29 07:22:43', '2017-06-29 07:22:43'),
(9, 3, '2017-06-29 07:50:26', '2017-06-29 07:50:26'),
(11, 2, '2017-06-30 06:02:16', '2017-06-30 06:02:16'),
(11, 3, '2017-06-30 06:02:16', '2017-06-30 06:02:16'),
(11, 4, '2017-06-30 06:02:16', '2017-06-30 06:02:16'),
(11, 5, '2017-06-30 06:02:16', '2017-06-30 06:02:16'),
(11, 6, '2017-06-30 06:02:16', '2017-06-30 06:02:16'),
(11, 7, '2017-06-30 06:02:16', '2017-06-30 06:02:16'),
(11, 158, '2017-06-30 06:02:16', '2017-06-30 06:02:16'),
(1012, 1, '2017-06-30 10:03:59', '2017-06-30 10:03:59'),
(1012, 2, '2017-06-30 10:03:59', '2017-06-30 10:03:59'),
(1012, 5, '2017-06-30 10:03:59', '2017-06-30 10:03:59'),
(1012, 6, '2017-06-30 10:03:59', '2017-06-30 10:03:59'),
(1012, 7, '2017-06-30 10:03:59', '2017-06-30 10:03:59'),
(1012, 161, '2017-06-30 10:03:59', '2017-06-30 10:03:59'),
(1013, 5, '2017-07-03 00:57:51', '2017-07-03 00:57:51'),
(1013, 163, '2017-07-03 00:57:51', '2017-07-03 00:57:51'),
(1013, 251, '2017-07-03 00:57:51', '2017-07-03 00:57:51'),
(1013, 252, '2017-07-03 00:57:51', '2017-07-03 00:57:51'),
(1013, 262, '2017-07-03 00:57:51', '2017-07-03 00:57:51'),
(1013, 271, '2017-07-03 00:57:51', '2017-07-03 00:57:51'),
(1013, 281, '2017-07-03 00:57:51', '2017-07-03 00:57:51'),
(1013, 313, '2017-07-03 00:57:51', '2017-07-03 00:57:51'),
(1013, 316, '2017-07-03 00:57:51', '2017-07-03 00:57:51'),
(1014, 1, '2017-07-12 04:26:46', '2017-07-12 04:26:46'),
(1014, 2, '2017-07-12 04:26:46', '2017-07-12 04:26:46'),
(1014, 3, '2017-07-12 04:26:46', '2017-07-12 04:26:46'),
(1016, 1, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 2, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 3, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 4, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 6, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 7, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 8, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 158, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 159, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 160, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 161, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 162, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 163, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 164, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 165, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 166, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 167, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 168, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 169, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 170, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 171, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 172, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 173, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 174, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 175, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 176, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 177, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 178, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 179, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 180, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 181, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 182, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 183, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 184, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 185, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 186, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 187, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 188, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 189, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 190, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 191, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 192, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 193, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 194, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 195, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 196, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 197, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 198, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 199, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 200, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 201, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 202, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 203, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 204, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 205, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 206, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 207, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 208, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 209, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 210, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 211, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 212, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 213, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 214, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 215, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 216, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 217, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 218, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 219, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 220, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 221, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 222, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 223, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 224, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 225, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 226, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 227, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 228, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 229, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 230, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 231, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 232, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 233, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 234, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 235, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 236, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 237, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 238, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 239, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 240, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 241, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 242, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 243, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 244, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 245, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 246, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 247, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 248, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 249, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 250, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 251, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 252, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 253, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 254, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 255, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 256, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 257, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 258, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 259, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 260, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 261, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 262, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 263, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 264, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 265, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 266, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 267, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 268, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 269, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 270, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 271, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 272, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 273, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 274, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 275, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 276, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 277, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 278, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 279, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 280, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 281, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 282, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 283, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 284, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 285, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 286, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 287, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 288, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 289, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 290, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 291, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 292, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 293, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 294, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 295, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 296, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 297, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 298, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 299, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 300, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 301, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 302, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 303, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 304, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 311, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 313, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1016, 315, '2017-07-18 09:36:49', '2017-07-18 09:36:49'),
(1017, 4, '2017-07-14 07:53:57', '2017-07-14 07:53:57'),
(1018, 312, '2017-07-14 07:55:41', '2017-07-14 07:55:41'),
(1018, 315, '2017-07-14 07:55:41', '2017-07-14 07:55:41'),
(1022, 2, '2018-07-20 13:53:48', '2018-07-20 13:53:48'),
(1022, 330, '2018-07-20 13:53:48', '2018-07-20 13:53:48'),
(1023, 1, '2018-07-25 15:12:19', '2018-07-25 15:12:19'),
(1023, 330, '2018-07-25 15:12:19', '2018-07-25 15:12:19'),
(1024, 1, '2018-07-25 15:35:29', '2018-07-25 15:35:29'),
(1025, 2, '2018-07-25 15:38:48', '2018-07-25 15:38:48'),
(1026, 2, '2018-07-25 15:46:44', '2018-07-25 15:46:44'),
(1027, 2, '2018-07-25 15:47:58', '2018-07-25 15:47:58'),
(1028, 2, '2018-07-25 15:48:16', '2018-07-25 15:48:16'),
(1029, 160, '2018-08-17 10:32:08', '2018-08-17 10:32:08'),
(1029, 174, '2018-08-17 10:32:08', '2018-08-17 10:32:08'),
(1029, 175, '2018-08-17 10:32:08', '2018-08-17 10:32:08'),
(1029, 323, '2018-08-17 10:32:08', '2018-08-17 10:32:08'),
(1029, 324, '2018-08-17 10:32:08', '2018-08-17 10:32:08'),
(1030, 3, '2018-08-17 10:46:07', '2018-08-17 10:46:07'),
(1030, 323, '2018-08-17 10:46:07', '2018-08-17 10:46:07'),
(1030, 324, '2018-08-17 10:46:07', '2018-08-17 10:46:07');

-- --------------------------------------------------------

--
-- テーブルの構造 `paid_vacations`
--

CREATE TABLE IF NOT EXISTS `paid_vacations` (
`vacation_id` int(10) unsigned NOT NULL,
  `vacation_date` date NOT NULL,
  `vacation_type` enum('AL','SL','PL','CL','UL') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'AL',
  `vacation_reason` text COLLATE utf8_unicode_ci,
  `vacation_confirm_by` int(10) unsigned NOT NULL,
  `vacation_status` enum('waitting','temp_approved','approved','unapproved','cancel') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'waitting',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- テーブルのデータのダンプ `paid_vacations`
--

INSERT INTO `paid_vacations` (`vacation_id`, `vacation_date`, `vacation_type`, `vacation_reason`, `vacation_confirm_by`, `vacation_status`, `deleted_at`, `created_at`, `updated_at`, `user_id`) VALUES
(1, '2017-12-28', 'AL', '', 0, 'cancel', NULL, '2017-12-25 02:17:25', '2017-12-25 02:17:32', 2),
(2, '2017-12-28', 'AL', 'なんでもええやろ', 2, 'cancel', NULL, '2017-12-25 02:17:42', '2018-01-16 05:28:17', 2),
(3, '2018-04-05', 'AL', '私用のため', 2, 'cancel', NULL, '2018-01-16 05:28:43', '2018-04-24 02:44:25', 2),
(4, '2018-04-27', 'AL', '暖かくなってきたので', 323, 'approved', NULL, '2018-04-12 02:59:33', '2018-05-08 09:40:34', 1),
(5, '2018-04-27', 'AL', 'あ', 323, 'unapproved', NULL, '2018-04-12 03:01:50', '2018-05-09 04:08:27', 310),
(6, '2018-04-30', 'AL', 'gjhghjg', 323, 'approved', NULL, '2018-04-30 05:33:06', '2018-05-09 09:02:07', 1),
(7, '2018-04-30', 'AL', '', 323, 'approved', NULL, '2018-04-30 05:33:23', '2018-05-09 09:11:04', 1),
(8, '2018-05-01', 'AL', '', 323, 'approved', NULL, '2018-04-30 05:33:47', '2018-05-09 09:13:04', 1),
(9, '2018-05-17', 'AL', 'Come back home for some resone', 323, 'approved', NULL, '2018-05-03 08:17:41', '2018-05-09 04:40:54', 323),
(10, '2018-05-11', 'AL', '', 323, 'cancel', NULL, '2018-05-04 07:12:56', '2018-05-08 02:37:03', 323),
(11, '2018-05-14', 'AL', 'fh', 323, 'unapproved', NULL, '2018-05-08 02:39:13', '2018-05-14 06:23:56', 323),
(12, '2018-05-17', 'AL', 'gjhj', 323, 'cancel', NULL, '2018-05-08 02:44:22', '2018-05-08 02:56:36', 323),
(13, '2018-05-10', 'AL', 'wgbsb', 323, 'cancel', NULL, '2018-05-08 03:00:56', '2018-05-08 06:22:42', 323),
(14, '2018-05-16', 'AL', 'gagag hihihi', 323, 'unapproved', NULL, '2018-05-08 06:36:38', '2018-05-09 07:36:28', 323),
(15, '2018-05-17', 'AL', '', 323, 'approved', NULL, '2018-05-09 02:22:59', '2018-05-09 04:17:01', 323),
(16, '2018-05-15', 'AL', '', 323, 'unapproved', NULL, '2018-05-14 03:24:49', '2018-05-14 03:27:00', 323),
(17, '2018-05-16', 'AL', '', 323, 'approved', NULL, '2018-05-14 03:27:36', '2018-05-14 03:41:18', 323),
(18, '2018-05-23', 'AL', '', 323, 'approved', NULL, '2018-05-14 03:29:34', '2018-05-14 03:36:19', 323),
(19, '2018-05-22', 'AL', '', 323, 'unapproved', NULL, '2018-05-14 03:44:16', '2018-05-17 04:42:19', 323),
(20, '2018-05-11', 'AL', '', 323, 'approved', NULL, '2018-05-14 04:04:05', '2018-05-14 05:56:44', 323),
(21, '2018-05-15', 'AL', '', 323, 'unapproved', NULL, '2018-05-14 04:07:54', '2018-05-14 05:56:36', 325),
(22, '2018-05-19', 'AL', '', 323, 'unapproved', NULL, '2018-05-14 06:52:53', '2018-05-16 10:00:40', 323),
(23, '2018-05-31', 'AL', '月末だから', 2, 'approved', NULL, '2018-05-16 04:08:29', '2018-05-16 04:16:14', 1),
(24, '2018-06-01', 'AL', '暑くなる', 2, 'approved', NULL, '2018-05-16 04:12:24', '2018-05-16 06:13:14', 3),
(25, '2018-06-02', 'AL', '', 1, 'unapproved', NULL, '2018-05-16 04:16:34', '2018-05-16 06:06:15', 1),
(26, '2018-05-18', 'AL', '', 1, 'unapproved', NULL, '2018-05-16 06:40:52', '2018-05-17 02:29:57', 322),
(27, '2018-05-17', 'AL', '', 2, 'approved', NULL, '2018-05-16 06:52:01', '2018-05-17 02:15:42', 322),
(28, '2018-05-26', 'AL', '', 0, 'cancel', NULL, '2018-05-17 02:13:39', '2018-05-17 02:13:48', 322),
(29, '2018-05-18', 'AL', '', 2, 'approved', NULL, '2018-05-17 07:25:46', '2018-07-06 04:49:55', 1),
(30, '2018-05-24', 'AL', '', 2, 'unapproved', NULL, '2018-05-17 07:25:52', '2018-05-17 07:27:18', 1),
(31, '2018-05-31', 'AL', '', 2, 'unapproved', NULL, '2018-05-17 07:25:57', '2018-05-17 07:27:09', 1),
(32, '2018-05-05', 'AL', '', 2, 'approved', NULL, '2018-05-17 07:26:01', '2018-05-17 07:27:34', 1),
(33, '2018-08-24', 'AL', '', 0, 'cancel', NULL, '2018-08-20 03:53:35', '2018-08-20 03:53:50', 3),
(34, '2018-08-19', 'AL', '', 0, 'waitting', NULL, '2018-08-20 03:54:02', '2018-08-20 03:54:02', 3);

-- --------------------------------------------------------

--
-- テーブルの構造 `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `permission_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission_description` text COLLATE utf8_unicode_ci NOT NULL,
  `permission_type_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `permissions`
--

INSERT INTO `permissions` (`permission_id`, `permission_name`, `permission_description`, `permission_type_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
('auto_test', 'unit test perm', 'Test add permission', 2, '2017-09-14 14:34:18', '2017-09-14 14:34:17', '2017-09-14 14:34:18'),
('create_account', '社員新規追加', '', 1, NULL, '2016-12-11 04:07:18', '2017-09-19 11:21:56'),
('create_department', '部署の作成', '', 2, NULL, '2016-12-11 04:07:18', '2017-09-24 15:25:19'),
('create_vacation', '有給申請', '', 6, '2017-09-24 08:10:21', '2016-12-11 04:07:18', '2017-09-24 08:10:21'),
('delete_account', '社員の削除', '', 1, NULL, '2016-12-11 04:07:18', '2017-09-24 09:23:57'),
('delete_department', '部署の削除', '', 2, NULL, '2016-12-11 04:07:18', '2017-09-24 15:25:28'),
('edit_account', '社員の編集', '', 1, NULL, '2016-12-11 04:07:18', '2017-09-19 11:22:28'),
('edit_cost', '経費の登録', '', 8, NULL, '2017-09-18 16:04:39', '2017-09-18 16:04:39'),
('edit_department', '部署の編集', '', 2, NULL, '2016-12-11 04:07:18', '2017-09-24 15:25:37'),
('edit_permission', '権限の編集', '', 4, NULL, '2016-12-11 04:07:18', '2017-09-24 15:24:01'),
('edit_salary', '給与の編集', '', 3, NULL, '2016-12-11 04:07:18', '2017-09-19 16:06:06'),
('edit_sales', '売上の追加・編集', '売上表へ売上金額を追加・編集できる', 8, NULL, '2017-09-18 15:26:02', '2017-09-18 15:26:02'),
('edit_sales_department', '売上管理用 部署の編集', '', 8, NULL, '2017-09-18 16:50:44', '2017-09-18 16:52:40'),
('edit_temp_vacation', '有給申請の仮承認編集', '', 6, NULL, '2018-04-24 03:51:30', '2018-04-24 03:51:30'),
('edit_user_detail', '社員詳細情報の編集', '', 1, NULL, '2017-09-19 11:32:51', '2017-09-19 11:32:51'),
('edit_vacation', '有給申請の承認編集', '', 6, NULL, '2016-12-11 04:07:18', '2017-09-21 09:53:04'),
('manage_account', 'Manage account', '', 1, '2017-09-24 09:55:00', '2016-12-11 04:07:18', '2017-09-24 09:55:00'),
('manage_department', 'Manage department', '', 2, '2017-09-24 14:23:05', '2016-12-11 04:07:18', '2017-09-24 14:23:05'),
('manage_permission', '作成・編集・閲覧', '', 5, NULL, '2016-12-11 04:07:18', '2017-09-24 11:02:22'),
('manage_salary', 'Manage Salary', '', 3, '2017-09-19 11:45:21', '2016-12-11 04:07:18', '2017-09-19 11:45:21'),
('manage_vacation', '全ての部署を編集・閲覧', '', 6, NULL, '2016-12-11 04:07:18', '2017-09-24 15:25:08'),
('password_salary', '給与用のパスワード編集', '', 3, NULL, '2016-12-11 04:07:18', '2017-09-19 11:55:11'),
('view_account', '社員情報の閲覧', '', 1, NULL, '2016-12-11 04:07:18', '2017-09-19 11:23:16'),
('view_cost', '経費と利益率の閲覧', '', 8, NULL, '2017-09-18 16:26:14', '2017-09-18 16:26:14'),
('view_department', 'View Department', '', 2, '2017-09-24 14:24:07', '2016-12-11 04:07:18', '2017-09-24 14:24:07'),
('view_my_number', 'マイナンバーの閲覧', '', 1, NULL, '2018-02-26 02:03:41', '2018-02-26 02:03:41'),
('view_permission', '権限の閲覧', '', 4, NULL, '2016-12-11 04:07:18', '2017-09-24 15:24:13'),
('view_salary', '給与の閲覧', '', 3, NULL, '2016-12-11 04:07:18', '2017-09-19 16:05:54'),
('view_vacation', '有給申請一覧表の閲覧', '', 6, NULL, '2016-12-11 04:07:18', '2017-09-21 09:53:22');

-- --------------------------------------------------------

--
-- テーブルの構造 `permission_passwords`
--

CREATE TABLE IF NOT EXISTS `permission_passwords` (
`permission_password_id` int(10) unsigned NOT NULL,
  `permission_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission_password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `last_login_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- テーブルのデータのダンプ `permission_passwords`
--

INSERT INTO `permission_passwords` (`permission_password_id`, `permission_id`, `permission_password`, `created_at`, `updated_at`, `last_login_at`) VALUES
(1, 'password_salary', '$2y$10$ySfgC480l1Wtj2W6uUCJpeO9eyJFA4wBSCGE88qm1gIxQX5p5avU2', '2017-08-28 18:59:59', '2018-01-16 19:56:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `permission_types`
--

CREATE TABLE IF NOT EXISTS `permission_types` (
`permission_type_id` int(10) unsigned NOT NULL,
  `permission_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- テーブルのデータのダンプ `permission_types`
--

INSERT INTO `permission_types` (`permission_type_id`, `permission_type_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ユーザー情報', NULL, '2017-12-18 03:06:00', '2017-12-18 03:06:00'),
(2, '部署', NULL, '2017-12-18 03:06:00', '2017-12-18 03:06:00'),
(3, '給与', NULL, '2017-12-18 03:06:00', '2017-12-18 03:06:00'),
(4, '権限編集', NULL, '2017-12-18 03:06:00', '2017-12-18 03:06:00'),
(5, 'アクセス許可', NULL, '2017-12-18 03:06:00', '2017-12-18 03:06:00'),
(6, '有給', NULL, '2017-12-18 03:06:00', '2017-12-18 03:06:00'),
(8, '売上', NULL, '2017-12-18 03:06:00', '2017-12-18 03:06:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `salaries`
--

CREATE TABLE IF NOT EXISTS `salaries` (
  `user_id` int(11) NOT NULL,
  `salary_basic` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '基本給',
  `salary_allowance` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '役職手当',
  `salary_child_allowance` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '家族（子供）手当',
  `salary_trans_allowance` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '通勤手当',
  `salary_others` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'その他',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `salaries`
--

INSERT INTO `salaries` (`user_id`, `salary_basic`, `salary_allowance`, `salary_child_allowance`, `salary_trans_allowance`, `salary_others`, `created_at`, `updated_at`) VALUES
(1, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(2, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(3, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(4, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(5, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(7, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(8, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(158, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(159, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(160, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(161, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(162, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(163, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(164, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(165, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(166, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(167, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(168, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(169, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(170, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(171, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(172, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(173, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(174, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(175, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(176, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(177, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(178, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(179, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(180, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(181, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(182, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(183, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(184, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(185, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(186, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(187, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(188, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(189, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(190, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(191, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(192, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(193, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(194, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(195, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(196, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(197, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(198, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(199, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(200, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(201, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(202, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(203, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(204, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(205, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(206, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(207, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(208, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(209, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(210, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(211, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(212, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(213, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(214, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(215, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(216, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(217, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(218, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(219, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(220, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(221, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(222, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(223, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(224, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(225, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(226, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(227, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(228, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(229, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(230, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(231, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(232, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(233, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(234, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(235, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(236, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(237, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(238, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(239, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(240, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(241, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(242, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(243, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(244, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(245, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(246, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(247, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(248, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(249, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(250, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(251, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(252, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(253, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(254, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(255, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(256, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(257, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(258, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(259, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(260, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(261, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(262, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(263, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(264, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(265, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(266, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(267, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(268, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(269, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(270, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(271, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(272, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(273, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(274, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(275, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(276, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(277, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(278, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(279, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(280, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(281, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(282, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(283, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(284, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(285, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(286, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(287, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(288, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(289, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(290, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(291, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(292, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(293, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(294, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(295, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(296, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(297, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(298, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(299, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(301, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(302, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(303, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(304, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(308, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(310, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(311, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(312, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(313, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(315, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(316, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(317, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(319, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(322, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(323, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(324, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(325, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(326, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(327, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(328, '', '', '', '', '', '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(329, 'eR1JGw8cjDQ6V3qfUAfHRw==', '1TqePiyr5pDe03U/oXJtcA==', '1TqePiyr5pDe03U/oXJtcA==', '1TqePiyr5pDe03U/oXJtcA==', '1TqePiyr5pDe03U/oXJtcA==', '2017-12-19 15:42:03', '2018-01-16 19:56:48'),
(330, '', '', '', '', '', '2018-07-20 13:19:16', '2018-07-20 13:19:16');

-- --------------------------------------------------------

--
-- テーブルの構造 `sales_costs`
--

CREATE TABLE IF NOT EXISTS `sales_costs` (
`sales_cost_id` int(10) unsigned NOT NULL,
  `sales_department_id` int(11) NOT NULL,
  `sales_cost_year_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sales_cost_value` double NOT NULL COMMENT '経費',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='部署毎の月の経費' AUTO_INCREMENT=13 ;

--
-- テーブルのデータのダンプ `sales_costs`
--

INSERT INTO `sales_costs` (`sales_cost_id`, `sales_department_id`, `sales_cost_year_month`, `sales_cost_value`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 0, '2018-05', 20, 2, '2018-01-12 07:04:46', '2018-05-01 07:46:52'),
(2, 2, '2018-01', 0, 2, '2018-01-12 07:05:31', '2018-01-12 07:12:27'),
(3, 3, '2018-01', 0, 2, '2018-01-12 07:05:44', '2018-01-12 07:12:33'),
(4, 1, '2018-05', 500, 2, '2018-05-01 03:54:12', '2018-05-01 03:54:58'),
(5, 2, '2018-05', 300, 2, '2018-05-01 03:55:07', '2018-05-01 06:27:46'),
(10, 3, '2018-05', 80, 2, '2018-05-01 06:51:26', '2018-05-01 06:51:26'),
(11, 0, '2018-06', 150, 2, '2018-05-01 07:17:50', '2018-05-01 07:18:17'),
(12, 1, '2018-06', 40, 2, '2018-05-01 07:18:02', '2018-05-01 07:18:02');

-- --------------------------------------------------------

--
-- テーブルの構造 `sales_departments`
--

CREATE TABLE IF NOT EXISTS `sales_departments` (
`sales_department_id` int(10) unsigned NOT NULL,
  `sales_department_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sales_department_start` date NOT NULL,
  `sales_department_end` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='売上管理で使用する部署名' AUTO_INCREMENT=12 ;

--
-- テーブルのデータのダンプ `sales_departments`
--

INSERT INTO `sales_departments` (`sales_department_id`, `sales_department_name`, `sales_department_start`, `sales_department_end`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'オフィスエム', '2010-01-01', '2050-01-01', NULL, '2017-08-27 20:53:42', '2017-08-27 20:53:42'),
(2, 'SHS（派遣・求人）', '2010-01-01', '2050-01-01', NULL, '2017-08-27 20:53:55', '2017-08-27 22:02:26'),
(3, 'DAYS', '2010-01-01', '2050-01-01', NULL, '2017-08-27 20:54:00', '2017-08-27 20:54:00'),
(4, '制作部', '2010-01-01', '2050-01-01', NULL, '2017-08-27 20:54:06', '2017-08-27 20:54:13'),
(5, 'WEB広告事業部', '2010-01-01', '2018-03-31', NULL, '2017-08-27 22:02:32', '2017-08-27 22:02:32'),
(6, '人材紹介事業部 ', '2010-01-01', '2050-01-01', NULL, '2017-08-27 22:02:44', '2017-08-27 22:02:44'),
(7, 'フォトスタジオ事業部', '2010-01-01', '2050-01-01', NULL, '2017-08-27 22:02:53', '2017-08-27 22:02:53'),
(8, 'kazcom事業部', '2010-01-01', '2050-01-01', NULL, '2017-08-27 22:03:02', '2017-08-27 22:03:02'),
(9, '福岡web(スピ・その他）', '2010-01-01', '2050-01-01', NULL, '2017-08-27 22:03:08', '2017-08-27 22:03:08'),
(10, 'WEBクリエーション事業部', '2018-04-01', '2020-03-01', NULL, '2018-04-06 05:36:00', '2018-04-30 09:25:01'),
(11, '総務', '2018-06-01', '2018-07-31', NULL, '2018-04-30 09:34:42', '2018-04-30 09:34:42');

-- --------------------------------------------------------

--
-- テーブルの構造 `sales_weeks`
--

CREATE TABLE IF NOT EXISTS `sales_weeks` (
`sales_week_id` int(10) unsigned NOT NULL,
  `sales_week_some` enum('1週目','2週目','3週目','4週目','5週目') COLLATE utf8_unicode_ci NOT NULL,
  `sales_week_goal` double NOT NULL COMMENT '売上目標',
  `sales_week_norma` double NOT NULL,
  `sales_week_result` double NOT NULL,
  `sales_week_year_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `sales_department_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='週毎の目標売上や結果' AUTO_INCREMENT=26 ;

--
-- テーブルのデータのダンプ `sales_weeks`
--

INSERT INTO `sales_weeks` (`sales_week_id`, `sales_week_some`, `sales_week_goal`, `sales_week_norma`, `sales_week_result`, `sales_week_year_month`, `user_id`, `sales_department_id`, `created_at`, `updated_at`) VALUES
(1, '1週目', 700, 200, 856.93, '2018-01', 2, 1, '2018-01-10 02:03:40', '2018-01-19 06:29:42'),
(5, '1週目', 500.56, 0, 557.77, '2018-01', 2, 2, '2018-01-10 02:44:52', '2018-01-12 06:14:24'),
(10, '1週目', 0, 0, 27.77, '2018-01', 2, 3, '2018-01-12 06:14:29', '2018-01-12 06:14:29'),
(11, '2週目', 0, 0, 500, '2018-01', 2, 2, '2018-01-19 06:29:31', '2018-01-19 06:29:31'),
(12, '3週目', 0, 0, 454, '2018-01', 2, 8, '2018-01-19 06:30:16', '2018-01-19 06:30:16'),
(13, '1週目', 1092, 878, 853.58, '2018-02', 2, 1, '2018-04-03 07:55:58', '2018-04-03 07:56:05'),
(14, '1週目', 484.79, 440.72, 446.56, '2018-02', 2, 2, '2018-04-03 07:56:15', '2018-04-03 07:56:21'),
(15, '1週目', 84, 74, 91.75, '2018-02', 2, 3, '2018-04-03 07:56:35', '2018-04-03 07:56:42'),
(16, '1週目', 150.8, 100, 120, '2018-04', 2, 1, '2018-04-30 05:15:04', '2018-04-30 06:40:00'),
(17, '2週目', 150, 100, 160, '2018-04', 2, 1, '2018-04-30 05:15:13', '2018-04-30 05:15:25'),
(18, '1週目', 200.6, 100, 50, '2018-04', 2, 2, '2018-04-30 05:15:39', '2018-04-30 06:40:04'),
(19, '2週目', 300, 100, 80, '2018-04', 2, 2, '2018-04-30 05:15:40', '2018-04-30 05:15:49'),
(20, '1週目', 800, 500, 400, '2018-05', 2, 1, '2018-05-01 03:50:42', '2018-05-01 03:51:01'),
(21, '2週目', 500, 300, 600, '2018-05', 2, 1, '2018-05-01 03:50:45', '2018-05-01 03:51:07'),
(22, '1週目', 300, 200, 100, '2018-05', 2, 2, '2018-05-01 03:50:46', '2018-05-01 03:51:18'),
(23, '2週目', 300, 200, 400, '2018-05', 2, 2, '2018-05-01 03:50:49', '2018-05-01 03:51:21'),
(24, '1週目', 3, 0, 0, '2018-06', 2, 1, '2018-07-05 09:32:40', '2018-07-05 09:32:40'),
(25, '2週目', 0, 0, 0, '2018-06', 2, 1, '2018-07-05 09:32:43', '2018-07-05 09:32:50');

-- --------------------------------------------------------

--
-- テーブルの構造 `service_workers`
--

CREATE TABLE IF NOT EXISTS `service_workers` (
  `user_id` int(10) unsigned NOT NULL,
  `service_worker_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_worker_error_count` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `service_workers`
--

INSERT INTO `service_workers` (`user_id`, `service_worker_token`, `service_worker_error_count`, `created_at`, `updated_at`) VALUES
(2, 'dga46maf450:APA91bE9mDAI5g3xgiYnORQzKzNWiA0mbMULROZlfIInQj3QLjqMd_gyCKXTcXaT9IRqV8Ws4rP-dBO_6WzMUTIDAwD1iBmVQ6DnEWbYNIE9comOxYuIcXGplAAaFfpBqrtcYn8ZxL0G', 0, '2018-07-20 00:51:19', '2018-07-20 00:51:19'),
(2, 'dri9nFnGYn8:APA91bF-CLeR6W78t_i_HQmljzMSlzpkJSozNs2Tmq8GnIQRdqgDRZdg7i0Oj9i8Swx_QvoxGO6m37rpnSwkooH8l5y7FWbGqy0azvcoMAWBiiNJpHSdq8tfUQt7j_snOQv39nUGx5J6', 0, '2018-07-30 14:20:18', '2018-07-30 14:20:18'),
(3, 'eS5pnTJoT10:APA91bGGSESnkmOJGGHwCpqdTx3F48fc3iUraUF8kFTgwk7NMuNTs0d3G1-F3U6AG0ivy1LXOPhSzrxCcV-6aKyZGdwWodoJ_5zJ8sRmGaVi9bpEt-ozJlxAwGSOdQGkhOSCxEPI0fSBnIRGsb657GyUQ5qSTXCRNg', 0, '2018-09-07 01:23:03', '2018-09-07 01:23:03'),
(330, 'cCiN-eKWG7A:APA91bFkMwwq5Njo-_DRoJib1LeguC1vw9oj1Ca5kmokWN5k-Xoqgg3rLJD_zEQwvKnFyypgR0JwcIlMTtO2In390TJFgyVTnyVN4pAIrQB_xvT8B8BDZERQiQ_LukLtwaboY85Hl6Ye', 0, '2018-07-20 04:55:26', '2018-07-20 04:55:26');

-- --------------------------------------------------------

--
-- テーブルの構造 `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `sessions`
--

INSERT INTO `sessions` (`id`, `payload`, `last_activity`) VALUES
('28ecdd987d104716f229a7a6271166096698b527', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibTRjdEUwNmt4c0pDaGV0RnZEUlJPVzhIZ3o4akxpdWNGQlAzeWF6ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vcGFzc2xvZy5ub3J0aGJheS5iaXovbG9naW4iO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNTM2NDQwNDQ4O3M6MToiYyI7aToxNTM2NDQwNDQ2O3M6MToibCI7czoxOiIwIjt9fQ==', 1536440448),
('76f9fe62546bcd12889de961eb2e4a18bdb492cb', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiaG9qM0dTdGNFMnZPZzUwZHpRbU1iM2tlR0RxckRGdk4wdkh5WVU4RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHBzOi8vcGFzc2xvZy5ub3J0aGJheS5iaXovbWludXRlL2RldGFpbC9zaG93LzExMiI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJpc19sb2dpbiI7YjoxO3M6NzoidXNlcl9pZCI7czoxOiIyIjtzOjk6InVzZXJfbmFtZSI7czo3OiLpgLLol6QgIjtzOjEwOiJ1c2VyX2VtYWlsIjtzOjE3OiJzaGluZG9AcmVtY29ycC5qcCI7czoxMzoiZGVwYXJ0bWVudF9pZCI7czoyOiIxOSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE1MzY0NDk1OTU7czoxOiJjIjtpOjE1MzY0NDk1OTA7czoxOiJsIjtzOjE6IjAiO319', 1536449595),
('afdb81bf16af748c997ba252fe8e15ac89b7f9c1', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiN3dyRGNsZ2ZrUnBjd0doc0puVkUwQ242aWt6Yk1YSjNKd1B2QVdReiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly9zaGluZG8uaW50ZXJuYWxfbWFuYWdlci5pbmZvL3VzZXJfZGV0YWlsL2VkaXQvMzI5Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjg6ImlzX2xvZ2luIjtiOjE7czo3OiJ1c2VyX2lkIjtzOjE6IjIiO3M6OToidXNlcl9uYW1lIjtzOjc6IumAsuiXpCAiO3M6MTA6InVzZXJfZW1haWwiO3M6MTc6InNoaW5kb0ByZW1jb3JwLmpwIjtzOjEzOiJkZXBhcnRtZW50X2lkIjtzOjI6IjE5IjtzOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTUzNjMwNTg3MDtzOjE6ImMiO2k6MTUzNjMwMzAwMztzOjE6ImwiO3M6MToiMCI7fX0=', 1536305871),
('b58c34c2b9c9326901b383b70b2081547c69440b', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNWF2MXdMYk8zUHNMZjJmVmlaZ3BGeDFBYzFBZzVxdll2UUg4Tko3SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vcGFzc2xvZy5ub3J0aGJheS5iaXoiO31zOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTUzNjQ3ODQ2MztzOjE6ImMiO2k6MTUzNjQ3ODQ2MztzOjE6ImwiO3M6MToiMCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1536478463),
('e0f3427d4765a74d05af7ffc07749ebc7a3f3ffe', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTzlNaU5VVWRGc1BUc2Fwa2d2dDNUTGFrd3cxOFBmMGRsRXVBdUNEMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vcGFzc2xvZy5ub3J0aGJheS5iaXoiO31zOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTUzNjQ0MDQ0NDtzOjE6ImMiO2k6MTUzNjQ0MDQ0NDtzOjE6ImwiO3M6MToiMCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1536440444);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(10) unsigned NOT NULL,
  `user_kanji_last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓（漢字）',
  `user_kanji_first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '名（漢字）',
  `user_kata_last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓（カタカナ）',
  `user_kata_first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '名（カタカナ）',
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `last_login_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=331 ;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`user_id`, `user_kanji_last_name`, `user_kanji_first_name`, `user_kata_last_name`, `user_kata_first_name`, `user_email`, `user_password`, `department_id`, `remember_token`, `deleted_at`, `last_login_at`, `created_at`, `updated_at`) VALUES
(1, '井上', '', '', '', 'inoue@remcorp.jp', '$2y$10$eDuftq4W6azEl0FLbhYO5.CBOf386VvxsA8aDvBVeszTrdG7tMCXW', 33, NULL, NULL, '2018-08-30 17:17:40', '2017-06-13 07:21:54', '2018-08-30 17:17:40'),
(2, '進藤', '', '', '', 'shindo@remcorp.jp', '$2y$10$lmqlvAYWqmkC9NXcIp.pYu68jMTAgErcpBsk02bq/pHQJxJzs3KOW', 19, NULL, NULL, '2018-09-09 08:33:11', '2017-06-13 07:25:54', '2018-09-09 08:33:11'),
(3, '山崎', '', '', '', 'yamasaki@remcorp.jp', '$2y$10$F32cZ3LVqv22Bf2aA9dGW.grOojWBrYwoU0qfVAAxM2pcuVrOLfIW', 21, NULL, NULL, '2018-09-07 10:23:00', '2017-06-15 07:16:20', '2018-09-07 10:23:00'),
(4, '巨海', '', '', '', 'komi@remcorp.jp', '$2y$10$66HyjrL31kIb.KCamzkG5uyxivSamPP9LhLZ4R2AJe9jtqXDn38he', 17, NULL, NULL, '2018-04-23 11:31:46', '2017-06-15 08:45:31', '2018-04-23 11:31:46'),
(5, '小谷', '', '', '', 'kotani@remcorp.jp', '$2y$10$dHnkbzI2XXh7vNm97U3OTOwLTPLLdZurm03N5vOMOKbSCJJqZPrh2', 17, NULL, NULL, '0000-00-00 00:00:00', '2017-06-15 08:56:08', '2017-06-26 06:41:03'),
(7, '石井常務', '', '', '', 'ishii@shs-corporation.com', '$2y$10$0sxtygwJz4qDUoHFbGu/rOPLhBtQhFoeQ4kj./Pr4Ve/fyej0TFAy', 27, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 01:00:03', '2017-06-19 01:00:03'),
(8, '濱野常務', '', '', '', 'hamano@remcorp.jp', '$2y$10$7xvxKLMpCQSiMr3oRv7g5um3WpfpNXDrgoCzs.y57WXpM3WeAKOvq', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:01:25', '2017-06-19 07:01:25'),
(158, 'dung1', '', '', '', 'dung1@remcorp.jp', '$2y$10$ysEx4/2nt1dKHpn5fARzb.AvGi.vrLUsgQTDT4Oh8u4SABM0Nvfwm', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:01', '2017-06-19 07:52:01'),
(159, 'dung2', '', '', '', 'dung2@remcorp.jp', '$2y$10$ZCX5N8ZE3zY4Z5N04med5.3YzNGIgPnAXCpcjKT3MjUqb8ICz3Zie', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:01', '2017-06-19 07:52:01'),
(160, 'dung3', '', '', '', 'dung3@remcorp.jp', '$2y$10$dxGWwS5BxM0VlwoI7E/nPet.np1TBFT1UqKrWC2nposBqnRhewsUC', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:02', '2017-06-19 07:52:02'),
(161, 'テスト4', '', '', '', 'test4@remcorp.jp', '$2y$10$Jec/m4Qxkm.NDAdtVx6mo.Re.S4M4RDvbdJOjP71mHx4sCdbozhFS', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:02', '2017-06-19 07:52:02'),
(162, 'テスト5', '', '', '', 'test5@remcorp.jp', '$2y$10$pUhmjqEvxAwiZtuzf74k1eaT44SIuVmb5sco3i.SDYUhvxZ6tu2m6', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:02', '2017-06-19 07:52:02'),
(163, 'テスト6', '', '', '', 'test6@remcorp.jp', '$2y$10$h.Edaweku974iidUwEbvT.ruDIqBAdNrGzzDwtNE/zRDvMrUhywL.', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:02', '2017-06-19 07:52:02'),
(164, 'テスト7', '', '', '', 'test7@remcorp.jp', '$2y$10$2bRxrr32O.tEm/uGHSERUe4gJgWS5cEFl56ZWlNclPzA6eR/Zg9DK', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:02', '2017-06-19 07:52:02'),
(165, 'テスト8', '', '', '', 'test8@remcorp.jp', '$2y$10$b0gPSUwGxdK3ZIePtyfMA.owNuDvDwqrGGzLyWIPlnnVPRHQ1D88y', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:02', '2017-06-19 07:52:02'),
(166, 'テスト9', '', '', '', 'test9@remcorp.jp', '$2y$10$knrU17erSRQ700OBD.WUIe6Kvj498JxK1w2z/akf6ToVjIV3oV3A6', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:02', '2017-06-19 07:52:02'),
(167, 'テスト10', '', '', '', 'test10@remcorp.jp', '$2y$10$2PDExvfLZyWCwlLTYq3yX.G1LeviSKe6r0h9pqHZyKswPlipUVjVS', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:02', '2017-06-19 07:52:02'),
(168, 'テスト11', '', '', '', 'test11@remcorp.jp', '$2y$10$Ne4j3ESsTfDJotwUyJoeOu4KYcUKfEQZM2JjCWCYRof1fLPm4b7qO', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:02', '2017-06-19 07:52:02'),
(169, 'テスト12', '', '', '', 'test12@remcorp.jp', '$2y$10$5p2tJqlnannyX5LesHIiFeeUv4gzc1OMpYB1ka9eE52gHPrsb5q1a', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:03', '2017-06-19 07:52:03'),
(170, 'テスト13', '', '', '', 'test13@remcorp.jp', '$2y$10$vAYL8IVbQ4uP/wIwHDWum.Y5Xi9Hw0fRMnNYjIqDl.o0AXNZAwxv.', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:03', '2017-06-19 07:52:03'),
(171, 'テスト14', '', '', '', 'test14@remcorp.jp', '$2y$10$x3xrVrMDbGFR/vLvCQK4X.IvY0hrw1thlClUD.fgCHQMN1spdW3De', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:03', '2017-06-19 07:52:03'),
(172, 'テスト15', '', '', '', 'test15@remcorp.jp', '$2y$10$ucIwYuWpuDXh/rmiPUVktebCrp3HZ.FwSnHAspneSm.ynatlt6g2a', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:03', '2017-06-19 07:52:03'),
(173, 'テスト16', '', '', '', 'test16@remcorp.jp', '$2y$10$ci7h4p7/T6rlovlOPDvG6e/3inLzoVxmdWosfE7YR3i7CJNXKHcYO', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:03', '2017-06-19 07:52:03'),
(174, 'テスト17', '', '', '', 'test17@remcorp.jp', '$2y$10$kRTvLf6MTvTdsxYmEEbQJ.Wf3jPrT2KoHI8Ys.lbOEROULUwFc.R2', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:03', '2017-06-19 07:52:03'),
(175, 'テスト18', '', '', '', 'test18@remcorp.jp', '$2y$10$ZF5fu1ZzssIxiZgtqTVPz./2vzcvf2qhh.u8ZVt5388nN7Pltqj8W', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:03', '2017-06-19 07:52:03'),
(176, 'テスト19', '', '', '', 'test19@remcorp.jp', '$2y$10$cD/dslf1hP9z90MfoNX83uC2E57E1LL8URAzONrfVapyoYY6SUrxe', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:04', '2017-06-19 07:52:04'),
(177, 'テスト20', '', '', '', 'test20@remcorp.jp', '$2y$10$S9q6cueLvhEz443HzFk/H.8J9CVeYx6X.xcad7/xZ2Tpr2lFHCfvG', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:04', '2017-06-19 07:52:04'),
(178, 'テスト21', '', '', '', 'test21@remcorp.jp', '$2y$10$Wityij3bnBbWV3.GJBNeRuir5d2zsVEzhT8KEpiH3eWbWsuqnBOg2', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:04', '2017-06-19 07:52:04'),
(179, 'テスト22', '', '', '', 'test22@remcorp.jp', '$2y$10$Ezs/0AfJGDE/kuygpV5ZCe6FZs67yBdec07xr8RAXWAZz2pN0i4gq', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:04', '2017-06-19 07:52:04'),
(180, 'テスト23', '', '', '', 'test23@remcorp.jp', '$2y$10$S4pElpSmFS0XAXpu6.FsUuexeVdYMufkIYsPkSUcLKRfiT0Fr9coi', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:04', '2017-06-19 07:52:04'),
(181, 'テスト24', '', '', '', 'test24@remcorp.jp', '$2y$10$JPognMKgqwfldu0WNSfuceTAL3hqf.TzZaac9ibrUffDajzLXzOli', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:04', '2017-06-19 07:52:04'),
(182, 'テスト25', '', '', '', 'test25@remcorp.jp', '$2y$10$KDvhcE7Jfuzd1WpScNPOeeorfg6GYkMxRrHh.Lye.eVuhfWkiW/2m', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:04', '2017-06-19 07:52:04'),
(183, 'テスト26', '', '', '', 'test26@remcorp.jp', '$2y$10$kKjMb.7MgmLUPMzvxFVpPOnuhiX..JooJRtqlaqFGtQj5/O0XqcOC', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:04', '2017-06-19 07:52:04'),
(184, 'テスト27', '', '', '', 'test27@remcorp.jp', '$2y$10$bM4KSSwdyCV6NgvXuc0iz.8IvRHRAI2WF/OdwNUz/T1AiwjZOnH0e', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:04', '2017-06-19 07:52:04'),
(185, 'テスト28', '', '', '', 'test28@remcorp.jp', '$2y$10$Jz5nq1D6JrZWGnQT/STqluluyFCdeKVQe2I395FvHx/YbnvcipIqy', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:04', '2017-06-19 07:52:04'),
(186, 'テスト29', '', '', '', 'test29@remcorp.jp', '$2y$10$GgdCu73TlJguWZUxsQHvAuQcUOcY5HCfvP.XpPEuiKlxxXwxIkNeO', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:05', '2017-06-19 07:52:05'),
(187, 'テスト30', '', '', '', 'test30@remcorp.jp', '$2y$10$cfvEC4znRpqHi/vtP6xOgOoucQdmTc94tSToSwlfg4R5vOW0sZaKy', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:05', '2017-06-19 07:52:05'),
(188, 'テスト31', '', '', '', 'test31@remcorp.jp', '$2y$10$0J6S.YSru65EwCXdYemCouPwv1a55qzgztmYa3tSFI4rDqAE6wvWy', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:05', '2017-06-19 07:52:05'),
(189, 'テスト32', '', '', '', 'test32@remcorp.jp', '$2y$10$E7FzJ15wlpyl7wgQLyFQLuuzvyjeRZkp2baiRmlP8c/YbJ/4s853e', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:05', '2017-06-19 07:52:05'),
(190, 'テスト33', '', '', '', 'test33@remcorp.jp', '$2y$10$/5itrbhnDlQlgtZWWs3tjOEncXcx9tUqp9zJuu0R3JvPVsQrQ6h0a', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:05', '2017-06-19 07:52:05'),
(191, 'テスト34', '', '', '', 'test34@remcorp.jp', '$2y$10$JVHV.y0WCHf5zG.KPOJjsOxzlyZeWegm9PatPt6k/ceb9yNzIe.Ce', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:05', '2017-06-19 07:52:05'),
(192, 'テスト35', '', '', '', 'test35@remcorp.jp', '$2y$10$zSwgQIXauUDl.PnLUK72Be9V5vFN1XkvK9Z9j2gN/e/vRFdEoRom6', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:05', '2017-06-19 07:52:05'),
(193, 'テスト36', '', '', '', 'test36@remcorp.jp', '$2y$10$bU2MN5Ooh3UiPfMUU9w7pOUCgrlWJI7lbxDxQ6bIgJia5B65yiZI2', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:05', '2017-06-19 07:52:05'),
(194, 'テスト37', '', '', '', 'test37@remcorp.jp', '$2y$10$pihl1ylJ7tQUrDU10eQOvuSJS31BR3IHymIdVP3cu1SRL/xJzIVzK', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:05', '2017-06-19 07:52:05'),
(195, 'テスト38', '', '', '', 'test38@remcorp.jp', '$2y$10$TsUZrMQ4Cy4Rlr85QEqRPeM7eRJDbhFlqgNjPqvaxLGK93Lcep0L6', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:05', '2017-06-19 07:52:05'),
(196, 'テスト39', '', '', '', 'test39@remcorp.jp', '$2y$10$FrjXl3/b6K.if5OxHzYuwesdWhGBxlHYIT5LU9bnh7qVJgjrwlss6', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:06', '2017-06-19 07:52:06'),
(197, 'テスト40', '', '', '', 'test40@remcorp.jp', '$2y$10$yPXVuN6soRnYUVPMGs7eBu/1tb8kD6nHNg/iEfo.gmV.b0d2CTgMK', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:06', '2017-06-19 07:52:06'),
(198, 'テスト41', '', '', '', 'test41@remcorp.jp', '$2y$10$urjtsRdi.HvhcIzjk46hX.G3cMKPUwJssAkeo9PBMF9bk6Sl5Z6Kq', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:06', '2017-06-19 07:52:06'),
(199, 'テスト42', '', '', '', 'test42@remcorp.jp', '$2y$10$LZYQJA63R5xYwwTMnhl80OiN76gxLPKxloiEJfnZWIAxlBOWc1HQS', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:06', '2017-06-19 07:52:06'),
(200, 'テスト43', '', '', '', 'test43@remcorp.jp', '$2y$10$dnvTXyJ5jfV5WKIp.gLKN.0dz9Fd.SyE2K713ACVDnoGhJjZ9UQIG', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:06', '2017-06-19 07:52:06'),
(201, 'テスト44', '', '', '', 'test44@remcorp.jp', '$2y$10$IHjz6rEZxav.0.kRHTz4OeJN36DlRxNLmFEQ3ph7RqlUZ238qEYWq', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:06', '2017-06-19 07:52:06'),
(202, 'テスト45', '', '', '', 'test45@remcorp.jp', '$2y$10$3rmMAHqtVdQ2bhzWmQaFI.I2YtHGepYGz8MQFyGnh7znJH4bPhmV6', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:06', '2017-06-19 07:52:06'),
(203, 'テスト46', '', '', '', 'test46@remcorp.jp', '$2y$10$CQ37wfBWPA81p9SPLmHc9e9xSIAYqHrRsrS7jSc0NGD6jsafDlNdC', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:06', '2017-06-19 07:52:06'),
(204, 'テスト47', '', '', '', 'test47@remcorp.jp', '$2y$10$hmoJ6n3o8HctNuc4crFiOO3yJdiDyaatQn9BJnLQzNE9Ge8dy1v/i', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:06', '2017-06-19 07:52:06'),
(205, 'テスト48', '', '', '', 'test48@remcorp.jp', '$2y$10$glw3a7LogwUG/J0zkj/nKeZk0JNzzeHrHbuniaFYpJETyCzdwc//q', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:06', '2017-06-19 07:52:06'),
(206, 'テスト49', '', '', '', 'test49@remcorp.jp', '$2y$10$y6ub3fvbdKsVeFHsuaoQTultLT5F7v0rurDANEmA0GybxRvSssI0G', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:07', '2017-06-19 07:52:07'),
(207, 'テスト50', '', '', '', 'test50@remcorp.jp', '$2y$10$QhHAwdH3tujNyJcszpcYZuNo48YvaJUTtVLXw8yT.8FVTqK1I6x/y', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:07', '2017-06-19 07:52:07'),
(208, 'テスト51', '', '', '', 'test51@remcorp.jp', '$2y$10$jprBDg01GGEocUG6nfFsE.c/StLml/qw7pbWNkoPwSCjriv9aBsNS', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:07', '2017-06-19 07:52:07'),
(209, 'テスト52', '', '', '', 'test52@remcorp.jp', '$2y$10$n468bDcN1dXTSiKHZ4l9yeoTOeuZQ1pPcDb2IyZwxDhwJ.N5ecMx.', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:07', '2017-06-19 07:52:07'),
(210, 'テスト53', '', '', '', 'test53@remcorp.jp', '$2y$10$Jg8d9IzFrsK9WdJfwWyN/eW2hFBGase8yG58KRlkcXRVqxxpVif7y', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:07', '2017-06-19 07:52:07'),
(211, 'テスト54', '', '', '', 'test54@remcorp.jp', '$2y$10$046AqAluaMSawKiVKSSjEupYEbS6BxI1LaSJYDwk8bvHTuqRHZpUe', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:07', '2017-06-19 07:52:07'),
(212, 'テスト55', '', '', '', 'test55@remcorp.jp', '$2y$10$OK0dcjmo/CNRSzDDzEJDnep9CZRo8yeCHKm20geX8HAM/LxqGBCma', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:07', '2017-06-19 07:52:07'),
(213, 'テスト56', '', '', '', 'test56@remcorp.jp', '$2y$10$XM6zIp910EGSF0jtT2dc2u7QL5FrRGzUgcKRBqX2lBrTcoHczDnui', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:08', '2017-06-19 07:52:08'),
(214, 'テスト57', '', '', '', 'test57@remcorp.jp', '$2y$10$eID8C/LqgND9z4mWrn2h4OWcCrJqlwBcFnLr/rKmQaXAF4pi3Zvn.', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:08', '2017-06-19 07:52:08'),
(215, 'テスト58', '', '', '', 'test58@remcorp.jp', '$2y$10$frYfXWH4INzv22vfG9Tk8OeUqvUoy41jHnY7.htCulBgrBXgkPWYW', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:08', '2017-06-19 07:52:08'),
(216, 'テスト59', '', '', '', 'test59@remcorp.jp', '$2y$10$2OmGIqteWdpXUZK7l9QYsOQm5mo27btoPCxuPvADZYaFGup7go5Ue', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:08', '2017-06-19 07:52:08'),
(217, 'テスト60', '', '', '', 'test60@remcorp.jp', '$2y$10$SxL9br0IX92Tgh5LXmtTauyimAbsBjiOzqjMaCAic0pno0.WLSmkW', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:08', '2017-06-19 07:52:08'),
(218, 'テスト61', '', '', '', 'test61@remcorp.jp', '$2y$10$MAVU1ZAPUbAwHu4qw/shR.UOVD4ud1qdIb4EUDhoG4dRCtzFfSnnm', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:08', '2017-06-19 07:52:08'),
(219, 'テスト62', '', '', '', 'test62@remcorp.jp', '$2y$10$IaceC4dgKQq81Haxd8zwyud0oJX1QiCDXhMPVirrZnYAqKK9Vgugy', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:08', '2017-06-19 07:52:08'),
(220, 'テスト63', '', '', '', 'test63@remcorp.jp', '$2y$10$Q2awIYqTTYz0mV04uE8vw.mpawGlbZvayvDo5L1XxrC2VbvsSkzZ6', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:08', '2017-06-19 07:52:08'),
(221, 'テスト64', '', '', '', 'test64@remcorp.jp', '$2y$10$u8RgWLs9PX9al7VxVC9My.BWXWjteW51o9tqn7bMG7YTeqtEpI65u', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:08', '2017-06-19 07:52:08'),
(222, 'テスト65', '', '', '', 'test65@remcorp.jp', '$2y$10$WqWA6TBVJGwKTxHw7gEc.O4Te7AGJAeJjpP/.Nv.lR.G8.O4oed/.', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:08', '2017-06-19 07:52:08'),
(223, 'テスト66', '', '', '', 'test66@remcorp.jp', '$2y$10$1iStEmzVnwzmyIDO0o7KCew636aQO6zftIKbCp86NI7.Vprzlavyq', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:09', '2017-06-19 07:52:09'),
(224, 'テスト67', '', '', '', 'test67@remcorp.jp', '$2y$10$sC31w4MSu2pr3GTfe2Xm4OXmLX2ZmPz3090H3h/3y71pCUifAIYpS', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:09', '2017-06-19 07:52:09'),
(225, 'テスト68', '', '', '', 'test68@remcorp.jp', '$2y$10$WCqT82LqSIOIAwZwbgTqKegX/giFpwFDbb30/bY0deYS9/E3wun9q', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:09', '2017-06-19 07:52:09'),
(226, 'テスト69', '', '', '', 'test69@remcorp.jp', '$2y$10$Rp44vI4lufbXbYrE2NKR6uy9tCrr0MoyghjEgiSPSir8uS10cjf2a', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:09', '2017-06-19 07:52:09'),
(227, 'テスト70', '', '', '', 'test70@remcorp.jp', '$2y$10$3dSQe9nTEZpe9iIorIrY2.N9GIfDa36o6uL59KAnEJcv5t07P9zzO', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:09', '2017-06-19 07:52:09'),
(228, 'テスト71', '', '', '', 'test71@remcorp.jp', '$2y$10$xvaBBk3x4fCGVlIbmikjw.u6RcN79AU6ILkjrSFOJIyZO5I5h1jZa', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:09', '2017-06-19 07:52:09'),
(229, 'テスト72', '', '', '', 'test72@remcorp.jp', '$2y$10$ybke496DigT.2nLe.QxDeuT/98uFtlHqQ50fDVB7muy.u7Xk0COiK', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:09', '2017-06-19 07:52:09'),
(230, 'テスト73', '', '', '', 'test73@remcorp.jp', '$2y$10$I9iAeQ.UIcOkEry7nGYA9OmN740BNNLALE5cGLIg/S6Fr2vks6odW', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:09', '2017-06-19 07:52:09'),
(231, 'テスト74', '', '', '', 'test74@remcorp.jp', '$2y$10$eHGGMDOwpQyGO//b6XdZPu0XFOJsOlLSrAOUcyfi9bI5IDD938hmS', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:09', '2017-06-19 07:52:09'),
(232, 'テスト75', '', '', '', 'test75@remcorp.jp', '$2y$10$xClTsHmXo5ixa/4EzDGF8eAPiel8IxCn0CMCxq9w1KY9uRGYgEFaO', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:10', '2017-06-19 07:52:10'),
(233, 'テスト76', '', '', '', 'test76@remcorp.jp', '$2y$10$kSjHO66FbxL1M5zjItcgmOEPJQwX.TJoyh8ozwBCTVt5V6Lip8n6y', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:10', '2017-06-19 07:52:10'),
(234, 'テスト77', '', '', '', 'test77@remcorp.jp', '$2y$10$4N4Cv8B3RV42yFqnO4xqD.AZnDHDvaK1/EYHvzIPpMDqyP8LvS4D6', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:10', '2017-06-19 07:52:10'),
(235, 'テスト78', '', '', '', 'test78@remcorp.jp', '$2y$10$CsUjw9gFiTtNcnLkZEvYLuCF3yYNuXUkSSAq16qzvSVNB1xnGG3Uy', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:10', '2017-06-19 07:52:10'),
(236, 'テスト79', '', '', '', 'test79@remcorp.jp', '$2y$10$hJSPqVusXBGn7EJUO1XvDuuCIzjdtr0wbfaI3./0ZilN47sUWG6te', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:10', '2017-06-19 07:52:10'),
(237, 'テスト80', '', '', '', 'test80@remcorp.jp', '$2y$10$hSlZnIHGPtz5yHd5Xw4nsu3tqbwdldgkRIRy1q5rSuDzich8Q0IHa', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:10', '2017-06-19 07:52:10'),
(238, 'テスト81', '', '', '', 'test81@remcorp.jp', '$2y$10$W4UeSpS49Fg985/sC7kYb.Ps.QbC7wPvnNRii8VQDCxsg4iuDMQ46', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:10', '2017-06-19 07:52:10'),
(239, 'テスト82', '', '', '', 'test82@remcorp.jp', '$2y$10$zLemfsGAhb4qKtuFf.T3j.j0ZGFnC7J0OU.RwrlXGLMofyxq/O3xG', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:10', '2017-06-19 07:52:10'),
(240, 'テスト83', '', '', '', 'test83@remcorp.jp', '$2y$10$S5GJ7VevKqK4itS2WCvWNOKyG3kyw1tHaAKfZEo6S8hNGUO45LdRe', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:10', '2017-06-19 07:52:10'),
(241, 'テスト84', '', '', '', 'test84@remcorp.jp', '$2y$10$VxsF/sAWzuZirPxjGt5pRu9ApLPVblhV4qxG9wV0UDWpktSG91Yca', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:10', '2017-06-19 07:52:10'),
(242, 'テスト85', '', '', '', 'test85@remcorp.jp', '$2y$10$o63W0bpbfpV2eyQCLFM0NuJAsdBbhGSvVkJicuS64Za2Haylu7ucO', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:11', '2017-06-19 07:52:11'),
(243, 'テスト86', '', '', '', 'test86@remcorp.jp', '$2y$10$eFUxDmRAOG9qHXQdQynYPe.APlnYgx21pONzlRxaTmArUIg7bhi56', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:11', '2017-06-19 07:52:11'),
(244, 'テスト87', '', '', '', 'test87@remcorp.jp', '$2y$10$aNyDfcyQNg.sTMYBSGxl7.gEl4z9WD5wHHcCHl24LeMAWj48m5auy', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:11', '2017-06-19 07:52:11'),
(245, 'テスト88', '', '', '', 'test88@remcorp.jp', '$2y$10$T2a4qiDeOs79vyG3pBM04.CXc0EbqYoHv37sPt9Tw489rCyNfB9hu', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:11', '2017-06-19 07:52:11'),
(246, 'テスト89', '', '', '', 'test89@remcorp.jp', '$2y$10$.0tZk/PNkyPu5mLXQnr/huSo82t0tY0yVw.eLkB002HibNDC04apW', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:11', '2017-06-19 07:52:11'),
(247, 'テスト90', '', '', '', 'test90@remcorp.jp', '$2y$10$bDIhwZb1hhOowCBio1Uw7.wQx3Htyc0hzrW3utHfS/UM8E1DRRbgq', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:11', '2017-06-19 07:52:11'),
(248, 'テスト91', '', '', '', 'test91@remcorp.jp', '$2y$10$nabtyRdfJI0umAGkpLlDV.VSZVcGV3BDuxBphjt39rQjUsIUks0Ze', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:11', '2017-06-19 07:52:11'),
(249, 'テスト92', '', '', '', 'test92@remcorp.jp', '$2y$10$VPNKA4QuP//d3rORbYrCyelPnVrJCohqZWJLu41lUerfCCnd/JCu.', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:11', '2017-06-19 07:52:11'),
(250, 'テスト93', '', '', '', 'test93@remcorp.jp', '$2y$10$ag0RsuUiq0VgK6DGgIaIYutUp4wpQfAegaWmpl6VOlvojXhaf18CO', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:11', '2017-06-19 07:52:11'),
(251, 'テスト94', '', '', '', 'test94@remcorp.jp', '$2y$10$/8hwP5m0IQX5WoTJZLLyeOG9i/L9cR6kCQpMhKHQ8xyiIZK27aff2', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:11', '2017-06-19 07:52:11'),
(252, 'テスト95', '', '', '', 'test95@remcorp.jp', '$2y$10$Kfu4glb9T8LtCQ8KG4e4B.w4sN0nwu1cQ.O44h8lHR7E.jXA.cATC', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:12', '2017-06-19 07:52:12'),
(253, 'テスト96', '', '', '', 'test96@remcorp.jp', '$2y$10$Ppn154X4BFOgYiEhJgGEaeEUoWoJFnkddP3C0eAu9u7dBLrw0cudS', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:12', '2017-06-19 07:52:12'),
(254, 'テスト97', '', '', '', 'test97@remcorp.jp', '$2y$10$rp.OHfvki26BfwO5dXKdmu7.cXX6lPFIhAJkVkN1GFyUe3l377WcG', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:12', '2017-06-19 07:52:12'),
(255, 'テスト98', '', '', '', 'test98@remcorp.jp', '$2y$10$gkPs1cOgMUfNorzcv1nzaOuikFnpec2USZrunh3YbFHFmGB.zmTQi', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:12', '2017-06-19 07:52:12'),
(256, 'テスト99', '', '', '', 'test99@remcorp.jp', '$2y$10$KdOQUiDHWELrdZhl02Pa8.UkLu7z1aKmt.LQb3IhA2u4BUC590C/i', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:12', '2017-06-19 07:52:12'),
(257, 'テスト100', '', '', '', 'test100@remcorp.jp', '$2y$10$O1IAX9ZbTMrwortWZpDLxuQm1poY18k.XzU4qSSGSl1Z8yVa01692', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:12', '2017-06-19 07:52:12'),
(258, 'テスト101', '', '', '', 'test101@remcorp.jp', '$2y$10$IlduRBYiPYwGUD6vflOqAenBloo2p.sXiMp4FqI54WH1YccoV6O2.', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:12', '2017-06-19 07:52:12'),
(259, 'テスト102', '', '', '', 'test102@remcorp.jp', '$2y$10$VPOh7xEliaGVWCyfzvyNzesvKZ6CBJI1reSww/TOCmrbRPQSdCzE.', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:12', '2017-06-19 07:52:12'),
(260, 'テスト103', '', '', '', 'test103@remcorp.jp', '$2y$10$K7S7Gy2L0hvZmqRuvEl.B.vg/s6s2N0sQW4kA/EC0qswaTb2.AYiC', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:13', '2017-06-19 07:52:13'),
(261, 'テスト104', '', '', '', 'test104@remcorp.jp', '$2y$10$BKXyuJKWl.jiiv5OuyldV.Ty33PKbiJ18IodxFUNKd31aUwETSwlO', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:13', '2017-06-19 07:52:13'),
(262, 'テスト105', '', '', '', 'test105@remcorp.jp', '$2y$10$7BhGxRXZoyr6nvqFkis.9uQMwEldfLgWUJvp2LRpG7homKAbV64AS', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:13', '2017-06-19 07:52:13'),
(263, 'テスト106', '', '', '', 'test106@remcorp.jp', '$2y$10$aX2XdlTBFfqNI0Ih.ZHS/OkPc1HtMIeIMoyHL.V8H6ECMed2/860q', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:13', '2017-06-19 07:52:13'),
(264, 'テスト107', '', '', '', 'test107@remcorp.jp', '$2y$10$SEbP9SzjaAnmlDQSxu2Cv.6hbzSQGJsPLQDEIU16p6hH.XR3nWRZC', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:13', '2017-06-19 07:52:13'),
(265, 'テスト108', '', '', '', 'test108@remcorp.jp', '$2y$10$VFySMi/Z.RkkZaHf8oinPuUI184zL8Oe3rfiCATgXjr1f5MNi/KsS', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:13', '2017-06-19 07:52:13'),
(266, 'テスト109', '', '', '', 'test109@remcorp.jp', '$2y$10$ibxGdfA3lWtR3hA85GT/bukylycM2wmnGxcivdnEylh97DehRLnAC', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:13', '2017-06-19 07:52:13'),
(267, 'テスト110', '', '', '', 'test110@remcorp.jp', '$2y$10$nDHWkvKQ5BPAXgGsB8F0wuef/lT4.r3S5nxPl7BGXCxK8Ww/iiOoG', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:13', '2017-06-19 07:52:13'),
(268, 'テスト111', '', '', '', 'test111@remcorp.jp', '$2y$10$OrFxdOioCh9u7rvheN1.COsYT4wFv1oi4NU5YUcRuH0SHJ7oK3Gt.', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:14', '2017-06-19 07:52:14'),
(269, 'テスト112', '', '', '', 'test112@remcorp.jp', '$2y$10$iqSYfEJ7993pMiRffz6xseJNY8u0P1TbLtyqLVbs6VdGmzbTQb3t.', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:14', '2017-06-19 07:52:14'),
(270, 'テスト113', '', '', '', 'test113@remcorp.jp', '$2y$10$0EpJiSXoIF72WhUFYrJ/2eOX5rYk3bjWQidOel80nOH8WF6ducVqC', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:14', '2017-06-19 07:52:14'),
(271, 'テスト114', '', '', '', 'test114@remcorp.jp', '$2y$10$OHrxgmoZifEFa3MEBfBvSO79jhHTD4AUV8Fje6it.WNIvHA7/83qK', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:14', '2017-06-19 07:52:14'),
(272, 'テスト115', '', '', '', 'test115@remcorp.jp', '$2y$10$ZX93AnT0z6KLbCRTGqn2PeUBopl/55abkcBv//JgHfmo24QNZHWDW', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:14', '2017-06-19 07:52:14'),
(273, 'テスト116', '', '', '', 'test116@remcorp.jp', '$2y$10$Xw1vMggBhQ3UV0rH.YA.JOshe5zpLHmGpp0K6e1RfxTggKzHXnk9q', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:14', '2017-06-19 07:52:14'),
(274, 'テスト117', '', '', '', 'test117@remcorp.jp', '$2y$10$PHi4Z/2k68m8gbobJwx55OQLnqRoxJ2nh4LP7Pa1VgJJ2D.KINQES', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:14', '2017-06-19 07:52:14'),
(275, 'テスト118', '', '', '', 'test118@remcorp.jp', '$2y$10$0qsAbkIZVji6TnXpa2ZtHeIypp70NpQ1EBPWoCSqC0aLoQPlx2hH2', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:14', '2017-06-19 07:52:14'),
(276, 'テスト119', '', '', '', 'test119@remcorp.jp', '$2y$10$Y5Fh6WD1iXLOq7/8zJAar.Up1eguHclrnz6aA28SVPgU4hdrekLq2', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:14', '2017-06-19 07:52:14'),
(277, 'テスト120', '', '', '', 'test120@remcorp.jp', '$2y$10$rz4l/JFZSnfO/b7ViT1rUuaZHzgMqiOuVuaekxOW5a7NdWKuQ9eQi', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:15', '2017-06-19 07:52:15'),
(278, 'テスト121', '', '', '', 'test121@remcorp.jp', '$2y$10$sf8aZVeoCShqpmoyOJze9e9Sh4f.l/fonuIxQRKwbYHxEpiu.uap2', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:15', '2017-06-19 07:52:15'),
(279, 'テスト122', '', '', '', 'test122@remcorp.jp', '$2y$10$We/NJ7e20ZoJs.JrGGvJXe5HlqRGvTIDuReQL6k4Tvf37RTmvmbCS', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:15', '2017-06-19 07:52:15'),
(280, 'テスト123', '', '', '', 'test123@remcorp.jp', '$2y$10$ln7L4R0azlW8fS57O4FcfeSARegC8pjPZybP7UqStNnfVBwyvq9OS', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:15', '2017-06-19 07:52:15'),
(281, 'テスト124', '', '', '', 'test124@remcorp.jp', '$2y$10$.kCnSpbN1UpE8jGOaLGHRuplNyMkiKMR4PUunPY4LGc0hIXJukJYS', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:15', '2017-06-19 07:52:15'),
(282, 'テスト125', '', '', '', 'test125@remcorp.jp', '$2y$10$L4vaRN9BLJ6UFMUEdrAp8u.7lp0VdxzWxzweDK62bKgHMpxXiraCK', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:15', '2017-06-19 07:52:15'),
(283, 'テスト126', '', '', '', 'test126@remcorp.jp', '$2y$10$h7bTI2CRnP3k0ldfMD7MzupgfQRZyciVtO.5Q0sFuGjgxqGUx.Xa.', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:15', '2017-06-19 07:52:15'),
(284, 'テスト127', '', '', '', 'test127@remcorp.jp', '$2y$10$kVUHerWx0KtOVY..6FXDF.4zgiGG3clFfCM3z6CJPoezahh3qYj7y', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:15', '2017-06-19 07:52:15'),
(285, 'テスト128', '', '', '', 'test128@remcorp.jp', '$2y$10$kFSo1jHiWbPwS4uIA7SA7.TTgFHU.Z2W/5JQVCWNEeP6VDKvp2IO2', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:15', '2017-06-19 07:52:15'),
(286, 'テスト129', '', '', '', 'test129@remcorp.jp', '$2y$10$8IukXSiH4UIeVHQ3Hy5pHOqz4paVAL4dns4yj7DqHqox2vZvjAWcq', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:15', '2017-06-19 07:52:15'),
(287, 'テスト130', '', '', '', 'test130@remcorp.jp', '$2y$10$q1HKP2Q2PYZQjsXWN1ic4eOdzwoAYOekIrbeAMLAigKOvHhR3r3Rq', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:16', '2017-06-19 07:52:16'),
(288, 'テスト131', '', '', '', 'test131@remcorp.jp', '$2y$10$BUX2qZq14hXVwWAJH3Ac8.zICi1nVqoXDySo/YsguT/AESJSa91nK', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:16', '2017-06-19 07:52:16'),
(289, 'テスト132', '', '', '', 'test132@remcorp.jp', '$2y$10$CjzP2e3jE3tGI4NPScREteR41.fefdaNIgZEK4NT3PBqgg80tbkey', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:16', '2017-06-19 07:52:16'),
(290, 'テスト133', '', '', '', 'test133@remcorp.jp', '$2y$10$Vp7JV06sHsuOTWZizM/YeOd67Teuq.7064to9aGypd22LAaBaLKva', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:16', '2017-06-19 07:52:16'),
(291, 'テスト134', '', '', '', 'test134@remcorp.jp', '$2y$10$XxJpylqh1Oh1enzbcEYn/O7.24TdA2byR75zeOfDG./qGjKgpgm2C', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:16', '2017-06-19 07:52:16'),
(292, 'テスト135', '', '', '', 'test135@remcorp.jp', '$2y$10$Q/dQ.YQeDncbrIUJk4DSzO/qLMacTe/0vs89pfD5WNLNsEdUU8keC', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:16', '2017-06-19 07:52:16'),
(293, 'テスト136', '', '', '', 'test136@remcorp.jp', '$2y$10$u2JOTFohJn5sl.gpgxqrMerb0B5us5YyVPWu8VpdqGJ8O2rNsduq2', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:16', '2017-06-19 07:52:16'),
(294, 'テスト137', '', '', '', 'test137@remcorp.jp', '$2y$10$OMfck0dyf5rHRSKFzXhWv.kcS8mS3CsX9ENTnVi3hiBrGmDTY8npu', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:16', '2017-06-19 07:52:16'),
(295, 'テスト138', '', '', '', 'test138@remcorp.jp', '$2y$10$AMrME9Cmyds6Cz3zaMqkyO9AVAt3lqLnWBeOXfTPTIlaTLad4MWxC', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:16', '2017-06-19 07:52:16'),
(296, 'テスト139', '', '', '', 'test139@remcorp.jp', '$2y$10$7yjgkbql015YRtqFCg3ho.sqFGU6d2vAmacQoLoUZAYTxY7QrhSL2', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:16', '2017-06-19 07:52:16'),
(297, 'テスト140', '', '', '', 'test140@remcorp.jp', '$2y$10$yhBC4g50KsnkFvPWdenLDu6My7DehCMhpvIUzpeY2H3w5CRdwex3u', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:17', '2017-06-19 07:52:17'),
(298, 'テスト141', '', '', '', 'test141@remcorp.jp', '$2y$10$GWYY6tKZlfH7FfdbmaSqA.tNDjbslApS9WvoYGLJjuk8pNMgThci6', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:17', '2017-06-19 07:52:17'),
(299, 'テスト142', '', '', '', 'test142@remcorp.jp', '$2y$10$nnlco42lzxvd1ZdCAM9kY.1SISRfG44vhy8cQeBk9mG/gSSaZXvVW', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:17', '2017-06-19 07:52:17'),
(301, 'テスト144', '', '', '', 'test144@remcorp.jp', '$2y$10$lZN3UQYkQeIUQXa9NXJ9W.lH4iZ21/77D3Psmy4CCGCVIwLQix1BC', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:17', '2017-06-19 07:52:17'),
(302, 'テスト145', '', '', '', 'test145@remcorp.jp', '$2y$10$e9nU1.Absta6.1YY3d45/OyE9P7WIPpLyL0hC.3H5QOkYVeqHfaNy', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:17', '2017-06-19 07:52:17'),
(303, 'テスト146', '', '', '', 'test146@remcorp.jp', '$2y$10$UaZBY9NiPHxX3m.G61sBvOOCxEaSoKofIE.364.OM4MYsG6fVosFm', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:17', '2017-06-19 07:52:17'),
(304, 'テスト147', '', '', '', 'test147@remcorp.jp', '$2y$10$MrL8./LqnOg7bKvznF4fWO9mdj7y8nmEeiTulFkh2bMRZ30wXELxi', 25, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 07:52:17', '2017-06-19 07:52:17'),
(308, '川島', '', '', '', 'kawasima@remcorp.jp', '$2y$10$v1yKj1.Jq1HH7zrjkrBl6us7dTbnA.7EhuUqu7d.j9p8NaNTmb3fi', 2, NULL, NULL, '0000-00-00 00:00:00', '2017-06-19 08:02:04', '2017-06-19 08:02:04'),
(310, '市川', '', '', '', 'ichikawa@remcorp.jp', '$2y$10$2RAeOSB5LK176MILfhxq0uX28AvMc7.e2J7WUolFzrcHmN09XPSha', 20, NULL, NULL, '2018-04-12 12:01:35', '2017-06-20 06:32:14', '2018-04-12 12:01:35'),
(311, '吉川', '', '', '', 'yoshikawa@remcorp.jp', '$2y$10$AkYKYr4suOZKjWtSuCeMaehea4x.wjbF/5uV4LxHCdIF.QHaMjGYW', 24, NULL, NULL, '0000-00-00 00:00:00', '2017-06-20 06:32:50', '2017-06-22 02:30:50'),
(312, '堀', '', '', '', 'hori@remcorp.jp', '$2y$10$8wk3odj0iP4N0BL4T84o/.3D5owc0Sa75MCgt7fLfq5pw.fvPnf2q', 23, NULL, NULL, '0000-00-00 00:00:00', '2017-06-22 08:03:06', '2017-06-22 08:03:06'),
(313, '尾藤', '', '', '', 'bito@remcorp.jp', '$2y$10$8ooahl9u/xfD4JwNi6R/7O59Rr5R/IRZx/b68trGlvjKS2ju.EvfC', 36, NULL, NULL, '0000-00-00 00:00:00', '2017-06-22 11:58:12', '2017-06-26 07:09:01'),
(315, '杉田 啓寿', '', '', '', 'sugita@remcorp.jp', '$2y$10$OyPtVe8oFRNlqQDzeBMHq.D7U/v/PqWYm2YRpcRORy3JK1.vQU7Bi', 26, NULL, NULL, '2018-02-26 11:15:06', '2017-06-26 10:07:18', '2018-02-26 11:15:06'),
(316, '石井', '', '', '', 'ishii@remcorp.jp', '$2y$10$884OMs0sB6ZHD2psxxW49ew6l2qBuY7mKpZDvR5je6Ioj/bhVSO52', 29, NULL, NULL, '0000-00-00 00:00:00', '2017-06-27 05:15:26', '2017-06-27 05:15:26'),
(317, '福田', '', '', '', 'fukuda@remcorp.jp', '$2y$10$doX9MqNo2nV.4vcfSiSbq.A6EfQ3YG8JaQ4yltHTrj9yxus5M68BC', 2, NULL, NULL, '0000-00-00 00:00:00', '2017-07-19 08:11:25', '2017-07-19 08:11:25'),
(319, '海部', '', '', '', 'kaifu@remcorp.jp', '$2y$10$ssspKnuqO8vIiM3bcuYVPeigdRvNapvWgycUbSsVGPUdaEl8AEY4m', 19, NULL, NULL, '0000-00-00 00:00:00', '2017-07-25 11:48:51', '2017-07-25 11:48:51'),
(322, '堀内', '', '', '', 'horiuchi@remcorp.jp', '$2y$10$DcVHsJoO78OdwYTADaaZdOBEnRT2n6jntE1Eumin9V4DIb0ljLL3e', 33, NULL, NULL, '2018-05-17 11:12:39', '2017-07-25 11:57:23', '2018-05-17 11:12:39'),
(323, 'Phuc', '', '', '', 'phuc@remcorp.jp', '$2y$10$HNOhZFI/9yflksnfBK.2R.bJeMcvpNrjwTtr7mzHnA5mpy4vqE.sG', 21, NULL, NULL, '2018-08-22 13:39:45', '2017-07-26 06:10:31', '2018-08-22 13:39:45'),
(324, 'Nga', '', '', '', 'nga@remcorp.jp', '$2y$10$cSmlwsRMNipmomlaMBt79eJJMkFzX7NexaONPVtvwMhdWj6AB7oa6', 21, NULL, NULL, '2018-08-20 11:01:14', '2017-07-26 06:11:09', '2018-08-20 11:01:14'),
(325, 'Dung', '', '', '', 'dung@remcorp.jp', '$2y$10$/Rurqq0HvneEkFOtS7Vo4.hpbgGbzJzUIMDoBu.Sgrjhhoxy4EmBa', 21, NULL, NULL, '2018-05-14 13:07:02', '2017-07-26 06:11:33', '2018-05-14 13:07:02'),
(326, '長谷川', '', '', '', 'hasegawa@remcorp.jp', '$2y$10$uPnunZiFQE7BwD7dIyyx4uBsAvca0PsHcm/sH1qrf1X5hZ85/CZAq', 26, NULL, NULL, '0000-00-00 00:00:00', '2017-07-27 03:53:36', '2017-07-27 03:53:36'),
(327, '池上', '', '', '', 'ikegami@remcorp.jp', '$2y$10$U7Vw8a9/DhK.IFJJmPWn3ei8ckQKzZJML48oySRe35.f6Du1sZiIy', 26, NULL, NULL, '0000-00-00 00:00:00', '2017-07-27 03:54:07', '2017-07-27 03:54:07'),
(328, '橋本', '', '', '', 'hashimoto@remcorp.jp', '$2y$10$/BTD6FnPAe51R13Gv8ZKPuHN43a7U.o/REDDJZX27z7iWDmbK934W', 32, NULL, NULL, '0000-00-00 00:00:00', '2017-07-27 06:56:00', '2017-07-27 06:56:00'),
(329, 'あまたつ', 'ひろゆき', 'アマタツ', 'ヒロユキ', 'amatatsu@remcorp.jp', '$2y$10$8NM3KoZwjhbMFckwUdJ4z.uS4iiBs5j4Xx4Amnxm/Kdy1v1EiCM2W', 27, NULL, NULL, '0000-00-00 00:00:00', '2017-12-19 15:42:03', '2017-12-19 15:42:03'),
(330, '和泉', '孔太', 'イズミ', 'コウタ', 'izumi@remcorp.jp', '$2y$10$SBpLeWzBq7mktsXjNDEOD.b6FBASI0dic4G4sdDyET91a/rlFv30e', 19, NULL, NULL, '2018-07-20 13:55:16', '2018-07-20 13:19:16', '2018-07-20 13:55:16');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_banks`
--

CREATE TABLE IF NOT EXISTS `user_banks` (
  `user_id` int(11) NOT NULL,
  `bank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '銀行名',
  `bank_branch` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '支店名',
  `bank_type` enum('普通','当座') COLLATE utf8_unicode_ci NOT NULL COMMENT '口座種類',
  `bank_number` int(11) NOT NULL COMMENT '口座番号',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `user_banks`
--

INSERT INTO `user_banks` (`user_id`, `bank_name`, `bank_branch`, `bank_type`, `bank_number`, `created_at`, `updated_at`) VALUES
(1, '', '', '普通', 0, '2017-12-18 12:06:01', '2018-05-17 16:25:38'),
(2, '', '', '普通', 0, '2017-12-18 12:06:01', '2017-12-28 14:46:38'),
(3, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(4, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(5, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(7, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(8, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(158, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(159, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(160, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(161, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(162, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(163, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(164, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(165, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(166, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(167, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(168, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(169, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(170, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(171, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(172, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(173, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(174, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(175, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(176, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(177, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(178, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(179, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(180, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(181, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(182, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(183, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(184, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(185, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(186, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(187, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(188, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(189, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(190, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(191, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(192, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(193, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(194, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(195, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(196, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(197, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(198, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(199, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(200, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(201, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(202, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(203, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(204, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(205, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(206, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(207, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(208, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(209, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(210, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(211, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(212, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(213, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(214, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(215, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(216, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(217, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(218, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(219, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(220, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(221, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(222, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(223, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(224, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(225, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(226, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(227, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(228, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(229, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(230, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(231, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(232, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(233, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(234, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(235, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(236, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(237, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(238, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(239, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(240, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(241, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(242, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(243, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(244, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(245, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(246, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(247, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(248, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(249, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(250, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(251, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(252, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(253, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(254, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(255, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(256, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(257, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(258, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(259, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(260, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(261, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(262, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(263, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(264, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(265, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(266, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(267, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(268, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(269, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(270, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(271, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(272, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(273, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(274, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(275, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(276, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(277, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(278, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(279, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(280, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(281, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(282, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(283, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(284, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(285, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(286, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(287, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(288, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(289, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(290, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(291, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(292, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(293, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(294, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(295, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(296, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(297, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(298, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(299, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(301, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(302, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(303, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(304, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(308, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(310, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(311, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(312, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(313, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(315, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(316, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(317, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(319, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(322, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(323, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(324, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(325, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(326, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(327, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(328, '', '', '普通', 0, '2017-12-18 12:06:01', '0000-00-00 00:00:00'),
(329, '', '', '普通', 0, '2017-12-19 15:42:03', '2018-09-07 16:36:37'),
(330, '', '', '普通', 0, '2018-07-20 13:19:16', '2018-09-07 16:23:51');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` int(11) NOT NULL,
  `detail_gender` enum('男','女') COLLATE utf8_unicode_ci NOT NULL,
  `detail_birthday` datetime NOT NULL,
  `detail_zip_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_address1` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '住所',
  `detail_address2` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '住所',
  `detail_district` int(11) NOT NULL COMMENT '都道府県',
  `detail_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '市区町村',
  `detail_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '電話番号',
  `detail_emergency_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '緊急連絡先',
  `detail_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '役職名',
  `detail_enter_company_date` date NOT NULL COMMENT '入社年月日',
  `detail_koyo_kubun` enum('正社員','アルバイト') COLLATE utf8_unicode_ci NOT NULL COMMENT '雇用区分',
  `detail_kisonenkin_bango` bigint(20) NOT NULL COMMENT '基礎年金番号',
  `detail_koyo_hojin` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '雇用法人',
  `detail_koyohoken_bango` bigint(20) NOT NULL COMMENT '基礎年金番号',
  `detail_my_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'マイナンバー',
  `detail_shakai_hoken` enum('加入','未加入') COLLATE utf8_unicode_ci NOT NULL COMMENT '社会保険',
  `detail_shaho_shutokubi` date NOT NULL COMMENT '社会保険資格取得年月日',
  `detail_shaho_kigo` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '社会保険の記号',
  `detail_shaho_bango` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '社会保険の番号',
  `detail_hokensha_bango` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '保険者番号',
  `detail_remarks` text COLLATE utf8_unicode_ci NOT NULL COMMENT '備考欄',
  `detail_dependent` enum('あり','なし') COLLATE utf8_unicode_ci NOT NULL COMMENT '扶養家族',
  `detail_number_vacation_day` int(11) NOT NULL DEFAULT '5' COMMENT 'デフォルトの休暇日',
  `detail_taishoku_date` date NOT NULL COMMENT '退職日',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `user_details`
--

INSERT INTO `user_details` (`user_id`, `detail_gender`, `detail_birthday`, `detail_zip_code`, `detail_address1`, `detail_address2`, `detail_district`, `detail_city`, `detail_tel`, `detail_emergency_tel`, `detail_position`, `detail_enter_company_date`, `detail_koyo_kubun`, `detail_kisonenkin_bango`, `detail_koyo_hojin`, `detail_koyohoken_bango`, `detail_my_number`, `detail_shakai_hoken`, `detail_shaho_shutokubi`, `detail_shaho_kigo`, `detail_shaho_bango`, `detail_hokensha_bango`, `detail_remarks`, `detail_dependent`, `detail_number_vacation_day`, `detail_taishoku_date`, `created_at`, `updated_at`) VALUES
(1, '男', '0000-00-00 00:00:00', '', 'shindo@remcorp.jp', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '', '加入', '0000-00-00', '', '', '', '', 'あり', 6, '0000-00-00', '2017-12-18 03:06:01', '2018-05-17 07:25:38'),
(2, '男', '1983-03-17 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 1151, '', 5090, '495982432501', '加入', '0000-00-00', '0', '0', '00-1111-2222-3333', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '2017-12-28 05:46:38'),
(3, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(4, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(5, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(7, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(8, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(158, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(159, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(160, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(161, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(162, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(163, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(164, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(165, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(166, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(167, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(168, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(169, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(170, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(171, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(172, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(173, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(174, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(175, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(176, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(177, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(178, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(179, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(180, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(181, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(182, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(183, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(184, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(185, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(186, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(187, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(188, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(189, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(190, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(191, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(192, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(193, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(194, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(195, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(196, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(197, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(198, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(199, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(200, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(201, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(202, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(203, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(204, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(205, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(206, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(207, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(208, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(209, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(210, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(211, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(212, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(213, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(214, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(215, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(216, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(217, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(218, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(219, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(220, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(221, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(222, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(223, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(224, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(225, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(226, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(227, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(228, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(229, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(230, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(231, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(232, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(233, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(234, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(235, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(236, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(237, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(238, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(239, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(240, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(241, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(242, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(243, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(244, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(245, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(246, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(247, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(248, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(249, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(250, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(251, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(252, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(253, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(254, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(255, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(256, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(257, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(258, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(259, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(260, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(261, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(262, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(263, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(264, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(265, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(266, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(267, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(268, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(269, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(270, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(271, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(272, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(273, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(274, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(275, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(276, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(277, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(278, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(279, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(280, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(281, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(282, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(283, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(284, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(285, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(286, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(287, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(288, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(289, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(290, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(291, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(292, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(293, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(294, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(295, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(296, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(297, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(298, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(299, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(301, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(302, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(303, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(304, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(308, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(310, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(311, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(312, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(313, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(315, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(316, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(317, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(319, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(322, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(323, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(324, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(325, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(326, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(327, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(328, '男', '0000-00-00 00:00:00', '', '', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '0', '加入', '0000-00-00', '0', '0', '0', '', 'あり', 5, '0000-00-00', '2017-12-18 03:06:01', '0000-00-00 00:00:00'),
(329, '女', '0000-00-00 00:00:00', '', 'shindo@remcorp.jp', '', 0, '', '', '', '', '2017-10-04', '正社員', 0, '', 0, '04444444', '加入', '0000-00-00', '', '00016', '0224444', '', 'あり', 5, '0000-00-00', '2017-12-19 06:42:03', '2018-09-07 07:36:37'),
(330, '男', '0000-00-00 00:00:00', '', 'shindo@remcorp.jp', '', 0, '', '', '', '', '0000-00-00', '正社員', 0, '', 0, '', '加入', '0000-00-00', '', '', '', '', 'あり', 5, '2018-10-03', '2018-07-20 04:19:16', '2018-09-07 07:23:51');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_detail_logs`
--

CREATE TABLE IF NOT EXISTS `user_detail_logs` (
`user_detail_log_id` int(10) unsigned NOT NULL,
  `user_id_created` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission_type_id` int(11) NOT NULL,
  `user_detail_log_content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- テーブルのデータのダンプ `user_detail_logs`
--

INSERT INTO `user_detail_logs` (`user_detail_log_id`, `user_id_created`, `user_id`, `permission_type_id`, `user_detail_log_content`, `created_at`, `updated_at`) VALUES
(1, 2, 329, 3, '{"user_id":"329","salary_basic_old":"","salary_basic":"eR1JGw8cjDQ6V3qfUAfHRw==","salary_allowance_old":"","salary_allowance":"1TqePiyr5pDe03U\\/oXJtcA==","salary_child_allowance_old":"","salary_child_allowance":"1TqePiyr5pDe03U\\/oXJtcA==","salary_trans_allowance_old":"","salary_trans_allowance":"1TqePiyr5pDe03U\\/oXJtcA==","salary_others_old":"","salary_others":"1TqePiyr5pDe03U\\/oXJtcA=="}', '2018-01-16 19:56:48', '2018-01-16 19:56:48');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_permissions`
--

CREATE TABLE IF NOT EXISTS `user_permissions` (
  `user_id` int(10) unsigned NOT NULL,
  `permission_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `user_permissions`
--

INSERT INTO `user_permissions` (`user_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 'edit_temp_vacation', '2018-05-16 06:44:07', '2018-05-16 06:44:07'),
(1, 'view_vacation', '2018-05-16 06:44:07', '2018-05-16 06:44:07'),
(2, 'create_account', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'create_department', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'delete_account', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'delete_department', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'edit_account', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'edit_cost', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'edit_department', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'edit_permission', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'edit_sales', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'edit_sales_department', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'edit_user_detail', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'edit_vacation', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'manage_permission', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'view_account', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'view_cost', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'view_my_number', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'view_permission', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'view_salary', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(2, 'view_vacation', '2018-04-12 02:58:44', '2018-04-12 02:58:44'),
(4, 'edit_vacation', '2018-04-12 03:02:19', '2018-04-12 03:02:19'),
(4, 'view_vacation', '2018-04-12 03:02:19', '2018-04-12 03:02:19'),
(323, 'create_account', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'create_department', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'delete_account', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'delete_department', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'edit_account', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'edit_cost', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'edit_department', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'edit_permission', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'edit_salary', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'edit_sales', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'edit_sales_department', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'edit_temp_vacation', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'edit_user_detail', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'manage_permission', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'password_salary', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'view_account', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'view_cost', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'view_my_number', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'view_permission', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(323, 'view_salary', '2018-05-16 04:33:18', '2018-05-16 04:33:18'),
(325, 'create_account', '2018-05-04 04:20:49', '2018-05-04 04:20:49'),
(325, 'create_department', '2018-05-04 04:20:50', '2018-05-04 04:20:50'),
(325, 'delete_account', '2018-05-04 04:20:49', '2018-05-04 04:20:49'),
(325, 'delete_department', '2018-05-04 04:20:50', '2018-05-04 04:20:50'),
(325, 'edit_account', '2018-05-04 04:20:49', '2018-05-04 04:20:49'),
(325, 'edit_cost', '2018-05-04 04:20:50', '2018-05-04 04:20:50'),
(325, 'edit_department', '2018-05-04 04:20:50', '2018-05-04 04:20:50'),
(325, 'edit_permission', '2018-05-04 04:20:50', '2018-05-04 04:20:50'),
(325, 'edit_salary', '2018-05-04 04:20:51', '2018-05-04 04:20:51'),
(325, 'edit_sales', '2018-05-04 04:20:50', '2018-05-04 04:20:50'),
(325, 'edit_sales_department', '2018-05-04 04:20:50', '2018-05-04 04:20:50'),
(325, 'edit_temp_vacation', '2018-05-04 04:20:51', '2018-05-04 04:20:51'),
(325, 'edit_user_detail', '2018-05-04 04:20:49', '2018-05-04 04:20:49'),
(325, 'edit_vacation', '2018-05-04 04:20:51', '2018-05-04 04:20:51'),
(325, 'manage_permission', '2018-05-04 04:20:52', '2018-05-04 04:20:52'),
(325, 'manage_vacation', '2018-05-04 04:20:51', '2018-05-04 04:20:51'),
(325, 'password_salary', '2018-05-04 04:20:51', '2018-05-04 04:20:51'),
(325, 'view_account', '2018-05-04 04:20:49', '2018-05-04 04:20:49'),
(325, 'view_cost', '2018-05-04 04:20:50', '2018-05-04 04:20:50'),
(325, 'view_my_number', '2018-05-04 04:20:49', '2018-05-04 04:20:49'),
(325, 'view_permission', '2018-05-04 04:20:51', '2018-05-04 04:20:51'),
(325, 'view_salary', '2018-05-04 04:20:51', '2018-05-04 04:20:51'),
(325, 'view_vacation', '2018-05-04 04:20:52', '2018-05-04 04:20:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_logins`
--
ALTER TABLE `auto_logins`
 ADD UNIQUE KEY `auto_logins_auto_login_id_user_id_unique` (`auto_login_id`,`user_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
 ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `dependents`
--
ALTER TABLE `dependents`
 ADD PRIMARY KEY (`dependent_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
 ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
 ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `minutes_details`
--
ALTER TABLE `minutes_details`
 ADD PRIMARY KEY (`minutes_detail_id`);

--
-- Indexes for table `minutes_groups`
--
ALTER TABLE `minutes_groups`
 ADD PRIMARY KEY (`minutes_group_id`);

--
-- Indexes for table `minutes_users`
--
ALTER TABLE `minutes_users`
 ADD UNIQUE KEY `minutes_users_minutes_group_id_user_id_unique` (`minutes_group_id`,`user_id`);

--
-- Indexes for table `paid_vacations`
--
ALTER TABLE `paid_vacations`
 ADD PRIMARY KEY (`vacation_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`permission_id`), ADD UNIQUE KEY `permissions_permission_id_unique` (`permission_id`);

--
-- Indexes for table `permission_passwords`
--
ALTER TABLE `permission_passwords`
 ADD PRIMARY KEY (`permission_password_id`);

--
-- Indexes for table `permission_types`
--
ALTER TABLE `permission_types`
 ADD PRIMARY KEY (`permission_type_id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
 ADD UNIQUE KEY `salaries_user_id_unique` (`user_id`);

--
-- Indexes for table `sales_costs`
--
ALTER TABLE `sales_costs`
 ADD PRIMARY KEY (`sales_cost_id`);

--
-- Indexes for table `sales_departments`
--
ALTER TABLE `sales_departments`
 ADD PRIMARY KEY (`sales_department_id`);

--
-- Indexes for table `sales_weeks`
--
ALTER TABLE `sales_weeks`
 ADD PRIMARY KEY (`sales_week_id`);

--
-- Indexes for table `service_workers`
--
ALTER TABLE `service_workers`
 ADD PRIMARY KEY (`user_id`,`service_worker_token`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
 ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `users_user_email_unique` (`user_email`);

--
-- Indexes for table `user_banks`
--
ALTER TABLE `user_banks`
 ADD UNIQUE KEY `user_banks_user_id_unique` (`user_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
 ADD UNIQUE KEY `user_details_user_id_unique` (`user_id`);

--
-- Indexes for table `user_detail_logs`
--
ALTER TABLE `user_detail_logs`
 ADD PRIMARY KEY (`user_detail_log_id`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
 ADD UNIQUE KEY `user_permissions_user_id_permission_id_unique` (`user_id`,`permission_id`), ADD KEY `user_permissions_permission_id_foreign` (`permission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
MODIFY `department_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `dependents`
--
ALTER TABLE `dependents`
MODIFY `dependent_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
MODIFY `district_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
MODIFY `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `minutes_details`
--
ALTER TABLE `minutes_details`
MODIFY `minutes_detail_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `minutes_groups`
--
ALTER TABLE `minutes_groups`
MODIFY `minutes_group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1031;
--
-- AUTO_INCREMENT for table `paid_vacations`
--
ALTER TABLE `paid_vacations`
MODIFY `vacation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `permission_passwords`
--
ALTER TABLE `permission_passwords`
MODIFY `permission_password_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permission_types`
--
ALTER TABLE `permission_types`
MODIFY `permission_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sales_costs`
--
ALTER TABLE `sales_costs`
MODIFY `sales_cost_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `sales_departments`
--
ALTER TABLE `sales_departments`
MODIFY `sales_department_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sales_weeks`
--
ALTER TABLE `sales_weeks`
MODIFY `sales_week_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=331;
--
-- AUTO_INCREMENT for table `user_detail_logs`
--
ALTER TABLE `user_detail_logs`
MODIFY `user_detail_log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `service_workers`
--
ALTER TABLE `service_workers`
ADD CONSTRAINT `service_workers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- テーブルの制約 `user_permissions`
--
ALTER TABLE `user_permissions`
ADD CONSTRAINT `user_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`permission_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
