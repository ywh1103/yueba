<template id="play">
    <div style="background: #2E323D;position: relative;">
        <mt-header style="background: #2E323D" :title="musicName">
            <router-link to="/" slot="left">
                <mt-button icon="back">返回</mt-button>
            </router-link>
            <mt-button icon="more" slot="right"></mt-button>
        </mt-header>
        <div style="width: 100%; height: 10rem;background: #2E323D;">
            <img id="bigImg"
                 style="animation: myfirst 20s linear infinite; animation-play-state:running; width:5rem;height: 5rem;margin: 0.8rem auto 0.8rem;display: block;border-radius: 50%"
                 :src="bigImg" alt="">
            <p style="margin-bottom: 0.2rem;color: #666; width: 100%; text-align: center;font-size: 0.25rem;font-family: '微软雅黑';">
                歌名：{{musicName}}</p>
            <p style="color: red; width: 100%; text-align: center;font-size: 0.25rem;font-family: '微软雅黑';">演唱：{{yanchang}}</p>
        </div>
        <audio style="position: absolute;bottom: 125px;width: 100%;" id="aud" :src="palyUrl" autoplay></audio>
        <div style="position: absolute;bottom: 0;width: 100%;height: 2rem;">
            <img @click="moshi"
                 style="width:20px;height: 14px;position: absolute;left: 20px;top: 0;bottom: 0;margin: auto;"
                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAaCAYAAADfcP5FAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjU4NEZENkI4QjVGQzExRTY5MEU5RjYwRjkyRkJFMUI2IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU4NEZENkI5QjVGQzExRTY5MEU5RjYwRjkyRkJFMUI2Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTg0RkQ2QjZCNUZDMTFFNjkwRTlGNjBGOTJGQkUxQjYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NTg0RkQ2QjdCNUZDMTFFNjkwRTlGNjBGOTJGQkUxQjYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7AHHQ0AAACb0lEQVR42sTXTUgVURjG8blqmmGYgZVBH1RIixRK3ES2UKGIFkUR4aJ21iaCKDAXBUJEm6hEWkVFEUQR1C6CoC+jMoK0TVlQQRFeohaZ6NXpfy7PwDAdx5lpYl744Z0zx5n3npnznnMd13WdmObjEL6gN8H/hypzokcVNuEgWtTWjBxcJ6WImlArutEWaP+ZZjImcmaYQqIBB7AL1ZbzwzivpErC7oMJ5PEcnzFm7TnDM73g/p94gD2oC97TNkKV+K3PTTiM3dN88/c4o8/TjZAr87AS69CocwM4i6u2EarFDTzGBl/7LOzFkOWb3kswk5ZgJ17oGuPoQXlxcNRpAR6pw1e0Wi5UjX345ktoACUJp/hcdGFS1+r2EirFOTUOY+MMF1qO03iFvhRqz1FM6P7rvRuYYfuF/TEutBCVKRXE20rojTk4poOXmJN25Y2oASMmCTMzNmsWPMSok00MqjYVE1qkRAadbOMjCiahUjUUMk5o0itm31GBFRknVGfyMQk91SLbEmOxTTtqsKz4tHixGzXLfmBbRrOsV6Unbw7KcEdJ9WNpCjdow3Uc95aEEB2qgSY6vMbVGiET91H/jwn5dwnPsBUVln5NWqpMXDGrhv9kMz7ppPnbqYUwSUKnfGuUiSncQnugX72ezk1tjf/afpjtRg+26Pg17qpG5SO+oKZ8dGK7r6T4z/XJO7WVYzxsg1aFHXp0/hiLaDQwOra4ptXeibJB82I21qAdq7TBykUscGu1GbP1/4ATuISpuFvYpE6iEBiVEW1XFqf1MyhO1PreH7O5v4jL6E/rZ1DcGNKS9BZH8CTqz6U/AgwARiU5Nt5Zq5UAAAAASUVORK5CYII="
                 alt="">
            <img @click="pre"
                 style="width:30px;height: 40px;position: absolute;left: 90px;top: 0;bottom: 0;margin: auto;"
                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAA/CAYAAABJliBsAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjQxNkMzMEU5QjU0MzExRTZBMDI2QUY0NEQyN0ZERTQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjQxNkMzMEVBQjU0MzExRTZBMDI2QUY0NEQyN0ZERTQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NDE2QzMwRTdCNTQzMTFFNkEwMjZBRjQ0RDI3RkRFNDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDE2QzMwRThCNTQzMTFFNkEwMjZBRjQ0RDI3RkRFNDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz60zFIfAAADtUlEQVR42tSaWUhVQRjHj+aSIaWkhZRkRkWCLYSQaLRSvRhUREQYPYRGRNRDSElkSBH1koREhVQS9dBDFC2EtCFUUJSllkkbVpZL6U1K0/T2H/pGrtPM9Zp3+eaDn+Dx3OP3u3NmOd8cx+1254Av4D1YCBzbCMOPFsdxEpy/UQPSHf4RC3LBb1Ae4SEgItkCgRxQ6pFrlmgJt8cJLhDHNPkkUALWKsdbwy345sNAPnihERARGcFcYAY4CbK9ncS1JaJBEajSCHwAKwcccQ+MdgZD5nxQ5/43esBREEvn9efMSSIenAJ9GoHHYK5yPjuJdeCzJvkOsANEaD7DRmISuOrWxxWQ7OWzIZcYAXbSN63GR7Dah2uEVGIOeKRJvhccA6N9vE5IJEaBIzTKqFEFMoZ4vaBLrABvNcn/ALsMHZeNxDhwztBxr4GUYVw74BJiYbkJfNUk30hD6nD/R0AlpoHbho57HMT56YsKiEQUKAQ/NQLPQZafb1W/S2SCak3yQmg3iAzAYOE3CTGml9KtosZNMCWAQ7ZfJFbR7KpGE9gQhElzWBITwCVN8n20Co0P0tLlvyTCwTbg0gi8pOeAYC4ehyyRDu5rku8Ee2lkcrhKxIADoFsjcIvmhFA9RPkksRjUa5JvARtpVna4SowFpzWPieL3MyCBSfmyP2e1eNYD2kGiUmGoB1vAHUYVEZm3Sy3ZRCoC3WA/mMVMYEB4K55VgjxQx75EqNxOMt5R0aqRce7G20nGZFALtjKuEg7aEp7xgAq61ba0RCe4rhzLBE/AIRDD88bST3amitwbsJzbPOFtxvZWGz0PxtsgMViV+hvIC+HyY8ir2GhQBH5pZCpBmg0SkjRKWg0hV0yrXvYSsqaUD9o0MmLVu8QGCUkSuGh4TC0HiTZISMQbCQ0amVaqAobZIOHQPlqJoXRzF0y3QUKSQWV6NbrAPhrl2Es4VKYvMJQzxXyzwAYJSSqoMHT8MnoMZi8hyQXNGplm+psVEg4VF84a1mGitabaICFZCl4bqueFQyzChXT3VCxNDho2IGtAtg0SkpngoaHjn/BhR4nNGwWiSL0dfNfIiPcS19sgIZkILht2WW/QcM1eQrIGfDJ0/AJlv5uthGAM7bLq1mHPwDwbJCRit7XWsJVc6q2gzO1tzChQAPaAkYZzXNyre6KgXQxmg3u2vcioxiuwCGwGbcrfOlSJXuYF5DJ6zfSCx7HDok88peYSUQGWWdI6KaAPNAiJVOo4XXT/NTmWxR8BBgBLuMQQVWRWDAAAAABJRU5ErkJggg=="
                 alt="">
            <img id="stop" @click="stop"
                 style="width:30px;height: 30px;position: absolute;left: 0;right: 0;top: 0;bottom: 0;margin: auto;"
                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAA/CAYAAAB0BEEKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjQwRkUzQUQ2QjU0MzExRTZCMDlDRTA1MjM1NkQ0MzZGIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjQwRkUzQUQ3QjU0MzExRTZCMDlDRTA1MjM1NkQ0MzZGIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NDBGRTNBRDRCNTQzMTFFNkIwOUNFMDUyMzU2RDQzNkYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDBGRTNBRDVCNTQzMTFFNkIwOUNFMDUyMzU2RDQzNkYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6xVb9sAAABDElEQVR42uzaoW4CQRSF4QusqalCrwSNa0UTHE/AM5DwCGhCQoKq4A2qqnEEhekD1DVpFgEhoDGI4UyyYlPTmR1Ek/43OYTA3D1fwE7DOfdgZhOla/HzpUyVS+TeSOkrrci9szIzoecubfy+RWSY2LdpSv5safMUeb6X2PeS6aVR+WBc/gW/TVtZlu+bkaXVvldlG7i3LHuz7McXK2UX8IDc7jMfynvg2YXV/JX+xIAGDRo0aNCgQYMGDRo0aNCgQYMGDRo0aNCgQYMGDRo0aNCgQYMGDRo06P+ILhQXkOJO/W+BfT55FX1ILN5Hnj8l9n37C6sd5bPmZVW/1428IPuorJVrjb6jMrgJMADFuHUX5KTDTgAAAABJRU5ErkJggg=="
                 alt="">
            <img @click="next"
                 style="width:30px;height: 40px;position: absolute;right: 90px;top: 0;bottom: 0;margin: auto;"
                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAA/CAYAAABJliBsAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjQyNkQ4NTZCQjU0MzExRTZCRkU0RDYzQkUzQkIzQTFDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjQyNkQ4NTZDQjU0MzExRTZCRkU0RDYzQkUzQkIzQTFDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NDI2RDg1NjlCNTQzMTFFNkJGRTRENjNCRTNCQjNBMUMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDI2RDg1NkFCNTQzMTFFNkJGRTRENjNCRTNCQjNBMUMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6ip8rHAAADq0lEQVR42tTaWUhVQRzH8XvFtLSyDdGIFqgIMcEsygissA3ahMTqxYjCspDCB2mDIKQMaSXaF2h9aINWoQXKh8gKbkGLZKuFoJKkFZZ2+078D9xOcyzimjMDH9FzfDi/O2fOPfOf8QeDQZ+FLR5FiMVGv4RIRCe8sSTEOcyW3+9G8GMRqvEKxySl6W1EyO+jfPREZfDXVocF+NlLhnodesGqJ6JdKXvjMK5hiA33VkQb5yYigNUyXqwJcQChj6suKMZ9pNsSYjEy8MR1fDjKsRPdjUvhGiTOwInCOnwJ/t6qMcukge0VwjEU14L6dhZ9TXk6tdUqMQm5qHOdy8Jj5P/hAdFht5NOHxzGd02vlCPZ1NtJZwKeaYI0YwM62xBCicZ6uXB3UwHH2xDCMQy3NEHULXcQvWwI4ZN3rIWo14SpwTwbQjjicdTjcXwZA20I4cjEc02QJhQi0oYQShcUewz8e0izIYQjWb5D3O0bShFrQwglAnn4oAnzElNtCOFIwCmPgX9CHgzGh3BMwwtNkHp5VPttCKHEYLOMDXe7KW/PxodwpOCOJoiax6yVeY3xIZyBvxwNmjCPMNaGEA41wTqtCdKKXYizIYRjhvsiQ6bFWbaEULpii8fAP4/a0APqcfaaCV5/mej5DatjpGEPRv5r8cyEpupdY7ACTbaGUK0V25GEl7aGUG0wDmGQjSGisAYPken1T5EGBxiH3Uh2Ha+XGnGMyT3RA3txSxPguIyNOpN7Yi62IsF1XA3opSgzeUyoAXsFJ10BWlAqPVIWjjJme1BFgyJ80nwzVyDV9LfY0QhoLr4RK/9QFenwEHHyVtqqCXAJA0yf2c3BO49KYY7pc2z16V7wqNnuR0+Tqx2Rcn83agI8RUY46k7t+T2hXp/3IdV1/CtKZFW2+X+vFP2tbtiGFs2nfxtJptdi1arqW83Fq+rfEikKhL0qHq7bqZ+scc/WnDuDArw3YeHRq9xSgI+aT1/1yEzTV4pS5dVAV2LZIWPD2DW7WCnL6yoRAXmdMHr1dDpeaS7+M1aFaRWo3QZ2okzWszXnriMPVSbud3LO58uum2zNNDFXtk1UdeRkpK2eSJHClW6f01EUotbUrUJq0XCTx8CtwmTT9gC6D0yRC9UtFJZIQOM2Mrpvp6uazqqQHWkBGzcyNkkNNN3kAG0N7ItYZsuOZdUTN0L+rkEOZvjs2XLtU+sTanPvfMThCBosuO4HIZOtGr+lu/YnyAeu6rF5PwQYAKrrK9n0xG+dAAAAAElFTkSuQmCC"
                 alt="">
            <img style="width:20px;height: 14px;position: absolute;right: 20px;top: 0;bottom: 0;margin: auto;"
                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAaCAYAAAA9rOU8AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjAwMjZBRDI5QjVGQjExRTY5RDQ2RDlFOTUyMzEwNEUzIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjAwMjZBRDJBQjVGQjExRTY5RDQ2RDlFOTUyMzEwNEUzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDAyNkFEMjdCNUZCMTFFNjlENDZEOUU5NTIzMTA0RTMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDAyNkFEMjhCNUZCMTFFNjlENDZEOUU5NTIzMTA0RTMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4sP7DhAAAAn0lEQVR42mL8//9/KwMDQwTDwILvQBzLAiTcgFiJYeCBPiMwZISBDMNBEDLHQI5hGCyAiWEQgVHHjDpm1DHUAixQmn+AHQYq9H6AHLMGiIMHOFB+AbEPKDQ4B0kMcYCqA2YgQwaImQfQMZ+A+M1o3TTqmFHHjDqGHiUfLxCrDbA7fgDxVVChdwTIsB4EARMDCplzQKw1wA75CsR3AQIMADpsI2+6VkQyAAAAAElFTkSuQmCC"
                 alt="">
        </div>
    </div>
</template>

<script>
    export default {
        name: 'play',
        data(){
            return {
                arrLength: '',
                hotArr: [],
                palyUrl: '',
                musicName: '',
                bigImg: '',
                zuoqv: '',
                yanchang: '',
                onOff: true,
                isshow:false
            }
        },
        mounted(){
            this.$emit('to-parent', this.isshow)
            var _this = this;
            axios.post("http://route.showapi.com/213-4?showapi_appid=38800&showapi_sign=2276e54dcd1a4518876f714e6e4d9294&topid=5&")
                .then(function (response) {
                    _this.arrLength = response.data.showapi_res_body.pagebean.songlist.length
                    _this.hotArr = response.data.showapi_res_body.pagebean.songlist[_this.$route.params.id];
                    _this.palyUrl = _this.hotArr.url;
                    _this.musicName = _this.hotArr.songname;
                    _this.bigImg = _this.hotArr.albumpic_big;
                    _this.yanchang = _this.hotArr.singername;
                    console.log(_this.hotArr)
                })
                .catch(function (err) {
                    console.log('----' + err);
                });
//            console.log(document.getElementById('#aud').duration)
            var audio = document.querySelector('#aud');
            console.log(audio.duration);
        },
        methods: {
            moshi: function () {

            },
            pre: function () {
                var _this = this;
                var musicIndex = _this.$route.params.id;
                musicIndex--;
                window.location.href = 'http://localhost:8080/#/play/'+musicIndex;
                if (musicIndex <= 0) {
                    window.location.href = 'http://localhost:8080/#/play/99'
                }else if(musicIndex >= _this.arrLength){
                    window.location.href = 'http://localhost:8080/#/play/0'
                }
                window.location.reload();
            },
            stop: function () {
                var _this = this;
                var audio = document.getElementById('aud');
                var bigImg = document.getElementById('bigImg');
                console.log(document.getElementById('stop'));
                if (_this.onOff) {
                    audio.pause();
                    document.getElementById('stop').src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAA9CAYAAAAEXoFnAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjQyMDRDNjEzQjU0MzExRTZBNEU0RjIzQThFQzRFRTk4IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjQyMDRDNjE0QjU0MzExRTZBNEU0RjIzQThFQzRFRTk4Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NDIwNEM2MTFCNTQzMTFFNkE0RTRGMjNBOEVDNEVFOTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDIwNEM2MTJCNTQzMTFFNkE0RTRGMjNBOEVDNEVFOTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz42p0z7AAADXElEQVR42tTae2jOURgH8N/7ms2MzXWZ+3JJWmpRInJpbZSRUsMfSyJCLvlDbiVauSWRP+QyMZIWyu2fteWS1FAvJTRsTFYsw0xie32fek69fp5DsuV5Tn3+eMcf5/v+fuc95zznROLxeICWBZ3hZWCwRWEJ1EMtlEGmuRR4Ek/jP7d3sAgi9JQsoCeREsrVG0qhAkZYeZ18bTrEYBOPFzMhjtIblvA5FUrgHkzQPCbqEsYDfZ4Mj+K/tlY4COnaxoQUgiTDVvgihKmHORZCOCOhIi6389DfQoiAf2qL4a0QpAlWQFR7CKcPlEKbEOYW5FgI4UyDJ0KQr7ADulgIQVJgG3c83CjgVAshnFFwQwhCr9wx6GUhhBv4i6FRCNMACyyEcDLhlOfn+CoMtRDCyYMaIUgzrIckCyFIKpR4Bv5dGGshhJPDc0i4fYO9kGYhRMCz+TJ4L4R5ATMshHD6wVnPwD/DPwzqQzgz4bkQpJF/qiMWQpCusJvHRrhV8epZfQhnDNwRgtA+Zgvva9SHcAN/FS/rw+0hTLQQwqENVrlnW3wIMiyEcApDfUrcFs+1EoJ0g32egX8RBlgI4dDypFoI8oHHUdRCCNIJ1sAnIcxp+j80sdQFQTCYy1ARxYW+QXAdshPLZpAeNVL3Hg7HQwGo1UCL9hDJsBkeQF7o36ogH9o0j4lJPNnF/3T0oDFEDzjsqW+VSatdbSHmwxuh87TqLdA+Y2fDNc8OcA+vetWunahosAE+CwFoksvVvoodDzGh8zSprfubqsj/CJHBq9JWIcAVGKJ9ZzcPXnsqhUXa99j07V7y1GyPQE/N1Y4kfr+lxdtjmKK97jQO7nvOMbbz8YDaCmB32A/fhQA3YbT2Wiydqr4SOk/Vv+UddbbXXiEGwgVPda+8o09Z/zUEfbOr4aPQeXois7WfFOV69r80iR3gsaH2zC6Ny/JSJSLGywnVp6ezoFbofAts7IhToPYMkQXnPAOXrk0M03yjIMrXHpo828RiDTfUfheCKta3Pd/+Seir+ZYNHRru9AzcZ5Cv/b5TAXdU2ibu4oDqqoThCqDUqmEp3wc0d5GxGdby3b+Y5gpbkufvl2GllRvL9CQqEz43QBEUWrpyTWOCLvcuhAw4AU3Wbln/EGAANlZgApNiw0gAAAAASUVORK5CYII=';
                    bigImg.style.animationPlayState = 'paused';
                } else {
                    audio.play();
                    document.getElementById('stop').src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAA/CAYAAAB0BEEKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjQwRkUzQUQ2QjU0MzExRTZCMDlDRTA1MjM1NkQ0MzZGIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjQwRkUzQUQ3QjU0MzExRTZCMDlDRTA1MjM1NkQ0MzZGIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NDBGRTNBRDRCNTQzMTFFNkIwOUNFMDUyMzU2RDQzNkYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDBGRTNBRDVCNTQzMTFFNkIwOUNFMDUyMzU2RDQzNkYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6xVb9sAAABDElEQVR42uzaoW4CQRSF4QusqalCrwSNa0UTHE/AM5DwCGhCQoKq4A2qqnEEhekD1DVpFgEhoDGI4UyyYlPTmR1Ek/43OYTA3D1fwE7DOfdgZhOla/HzpUyVS+TeSOkrrci9szIzoecubfy+RWSY2LdpSv5safMUeb6X2PeS6aVR+WBc/gW/TVtZlu+bkaXVvldlG7i3LHuz7McXK2UX8IDc7jMfynvg2YXV/JX+xIAGDRo0aNCgQYMGDRo0aNCgQYMGDRo0aNCgQYMGDRo0aNCgQYMGDRo06P+ILhQXkOJO/W+BfT55FX1ILN5Hnj8l9n37C6sd5bPmZVW/1428IPuorJVrjb6jMrgJMADFuHUX5KTDTgAAAABJRU5ErkJggg==';
                    bigImg.style.animationPlayState = 'running';
                }
                _this.onOff = !_this.onOff;
            },
            next: function () {
                var _this = this;
                var musicIndex = _this.$route.params.id;
                musicIndex++;
                window.location.href = 'http://localhost:8080/#/play/'+musicIndex;
                if(musicIndex >= _this.arrLength){
                    window.location.href = 'http://localhost:8080/#/play/0'
                }
                window.location.reload();
            }
        }
    }
</script>

<style>
    @keyframes myfirst {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

</style>