import axios, {AxiosError, AxiosInstance, AxiosRequestConfig} from "axios";

const ADDR: string ="XXX";

const axiosBaseConfig: AxiosRequestConfig = {
    baseURL: ADDR,
    timeout: 8000,
    timeoutErrorMessage: "Server timeout",
    headers: {
        "Content-Type": "application/json",
    },
};

class Backend {
    private axios: AxiosInstance;

    constructor() {
        this.axios = axios.create({
            ...axiosBaseConfig,
        });
    }


    async sendRequestForData<T, E>(
        config: AxiosRequestConfig,
        transformer: (input: T) => E
    ): Promise<E> {
        try {
            const response = await this.axios.request<T>(config);
            return transformer(response.data);
        } catch (err) {
            if (err) {
                const axiosError = err as AxiosError;
                if (err.response) {
                    console.log(
                        "Request failed with: " +
                        axiosError.response?.status +
                        " data: " +
                        JSON.stringify(axiosError.response?.data)
                    );
                } else {
                    console.error("Request failed without response: ", axiosError.message);
                }
            }
            throw err;
        }
    }

    keepData<E>(data: E): E {
        return data;
    }

    //* == REQUESTS HERE == *//
    // EXAMPLES:
    // async checkUsername(username: string): Promise<Type.UsernameCheck> {
    //     return this.sendRequestForData<Type.UsernameCheck, Type.UsernameCheck>(
    //         {
    //             url: `/username/${username}`,
    //             method: "GET",
    //         },
    //         this.keepData
    //     );
    // }
    //
    // async doAuthentication(userCredentials: Type.UserCredentials): Promise<string> {
    //     return this.sendRequestForData<string, string>(
    //         {
    //             url: "/auth",
    //             method: "POST",
    //             data: JSON.stringify(userCredentials),
    //         },
    //         this.keepData
    //     );
    // }
}